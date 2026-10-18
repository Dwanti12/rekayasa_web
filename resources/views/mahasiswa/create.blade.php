@extends('layouts.main')

@section('title', 'Tambah Mahasiswa')

@section('content')
<style>
    .crud-page {
        max-width: 680px;
        margin: 32px auto;
        padding: 0 16px;
    }

    .crud-card {
        padding: 30px;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        background: #fff;
        box-shadow: 0 6px 20px rgba(15, 23, 42, .08);
    }

    .crud-card h1 {
        margin: 0 0 6px;
        color: #1e293b;
        font-size: 26px;
    }

    .crud-description {
        margin: 0 0 24px;
        color: #64748b;
    }

    .crud-field {
        margin-bottom: 18px;
    }

    .crud-field label {
        display: block;
        margin-bottom: 7px;
        color: #334155;
        font-weight: 600;
    }

    .crud-field input,
    .crud-field select,
    .crud-field textarea {
        display: block;
        width: 100%;
        box-sizing: border-box;
        padding: 11px 12px;
        border: 1px solid #cbd5e1;
        border-radius: 7px;
        background: #fff;
        color: #1e293b;
        font: inherit;
    }

    .crud-field textarea {
        min-height: 100px;
        resize: vertical;
    }

    .crud-error {
        display: block;
        margin-top: 5px;
        color: #dc3545;
        font-size: 13px;
    }

    .crud-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 24px;
    }

    .crud-button {
        display: inline-block;
        padding: 11px 16px;
        border: 0;
        border-radius: 7px;
        font: inherit;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
    }

    .crud-cancel {
        border: 1px solid #cbd5e1;
        background: #fff;
        color: #334155;
    }

    .crud-save {
        background: #1473e6;
        color: #fff;
    }

    
.crud-validation-errors {
    margin-bottom: 20px;
    padding: 14px 18px;
    border: 1px solid #f5c2c7;
    border-radius: 8px;
    background: #f8d7da;
    color: #842029;
}

.crud-validation-errors ul {
    margin: 8px 0 0;
    padding-left: 20px;
}

.crud-validation-errors li {
    margin-bottom: 4px;
}

</style>

<div class="crud-page">
    <div class="crud-card">
        <h1>Tambah Mahasiswa</h1>
        <p class="crud-description">Masukkan data mahasiswa pada formulir berikut.</p>

        
@if ($errors->any())
    <div class="crud-validation-errors">
        <strong>Data belum valid!</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf

            <div class="crud-field">
                <label for="nim">NIM</label>
                <input id="nim" name="nim" value="{{ old('nim') }}" required>
                @error('nim') <span class="crud-error">{{ $message }}</span> @enderror
            </div>

            <div class="crud-field">
                <label for="nama">Nama</label>
                <input id="nama" name="nama" value="{{ old('nama') }}" required>
                @error('nama') <span class="crud-error">{{ $message }}</span> @enderror
            </div>

            <div class="crud-field">
                <label for="jk">Jenis Kelamin</label>
                <select id="jk" name="jk" required>
                    <option value="">Pilih jenis kelamin</option>
                    <option value="L" @selected(old('jk') === 'L')>Laki-laki</option>
                    <option value="P" @selected(old('jk') === 'P')>Perempuan</option>
                </select>
                @error('jk') <span class="crud-error">{{ $message }}</span> @enderror
            </div>

            <div class="crud-field">
                <label for="prodi">Program Studi</label>
                <input id="prodi" name="prodi" value="{{ old('prodi') }}" required>
                @error('prodi') <span class="crud-error">{{ $message }}</span> @enderror
            </div>

            <div class="crud-field">
                <label for="no_telp">Nomor Telepon</label>
                <input id="no_telp" name="no_telp" value="{{ old('no_telp') }}" required>
                @error('no_telp') <span class="crud-error">{{ $message }}</span> @enderror
            </div>

            <div class="crud-field">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" required>{{ old('alamat') }}</textarea>
                @error('alamat') <span class="crud-error">{{ $message }}</span> @enderror
            </div>

            <div class="crud-actions">
                <a href="{{ route('mahasiswa.index') }}" class="crud-button crud-cancel">
                    Batal
                </a>
                <button type="submit" class="crud-button crud-save">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
</div>
@endsection