
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', fn () => view('page.home'));
Route::get('/profile', fn () => view('page.profile'));
Route::get('/about', fn () => view('page.about'));
Route::get('/contact', fn () => view('page.contact'));
Route::get('/news', fn () => view('page.news'));

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/mahasiswa/{nama}/{nim}', function ($nama, $nim) {
    return "Nama: {$nama} | NIM: {$nim}";
});

Route::get('/mahasiswadetail/{nim}/{nama}', function ($nim, $nama) {
    return "NIM = {$nim} <br> Nama Mahasiswa: {$nama}";
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', fn () => 'Admin Dashboard');
    Route::get('/mahasiswa', fn () => 'Data Mahasiswa');
});
