<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::orderBy('nama')->get();

        return view('mahasiswa.index', compact('data'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => [
                'required',
                'string',
                'max:15',
                'unique:mahasiswas,nim',
            ],
            'nama' => ['required', 'string', 'max:100'],
            'jk' => ['required', Rule::in(['L', 'P'])],
            'prodi' => ['required', 'string', 'max:100'],
            'no_telp' => ['required', 'string', 'max:20'],
            'alamat' => ['required', 'string'],
        ]);

        Mahasiswa::create($validated);

        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }
    
    public function show(string $mahasiswa)
    {       
        $data = Mahasiswa::findOrFail($mahasiswa);

        return view('mahasiswa.show', compact('data'));
    }

    public function edit(string $mahasiswa)
    {
        $data = Mahasiswa::findOrFail($mahasiswa);

        return view('mahasiswa.edit', compact('data'));
    }

    public function update(Request $request, string $mahasiswa)
    {
        $data = Mahasiswa::findOrFail($mahasiswa);

        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'jk' => ['required', Rule::in(['L', 'P'])],
            'prodi' => ['required', 'string', 'max:100'],
            'no_telp' => ['required', 'string', 'max:20'],
            'alamat' => ['required', 'string'],
        ]);

        $data->update($validated);

        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    // DELETE: hapus data mahasiswa
    public function destroy(string $mahasiswa)
    {
        Mahasiswa::findOrFail($mahasiswa)->delete();

        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
