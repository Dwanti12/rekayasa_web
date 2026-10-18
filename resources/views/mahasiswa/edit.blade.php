@extends('layouts.main')

@section('title', 'Edit Mahasiswa')

@section('content')
<style>
    .edit-page {
        max-width: 680px;
        margin: 32px auto;
        padding: 0 16px;
    }

    .edit-card {
        padding: 30px;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        background: #fff;
        box-shadow: 0 6px 20px rgba(15, 23, 42, 0.08);
    }

    .edit-card h1 {
        margin: 0 0 6px;
        color: #1e293b;
        font-size: 26px;
    }

    .edit-description {
        margin: 0 0 24px;
        color: #64748b;
    }

    .edit-field {
        margin-bottom: 18px;
    }

    .edit-field label {
        display: block;
        margin-bottom: 7px;
        color: #334155;
        font-weight: 600;
    }

    .edit-field input,
    .edit-field select,
    .edit-field textarea {
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

    .edit-field input[readonly] {
        background: #f1f5f9;
        color: #64748b;
    }

    .edit-field textarea {
        min-height: 100px;
        resize: vertical;
    }

    .edit-error {
        display: block;
        margin-top: 5px;
        color: #dc3545;
        font-size: 13px;
    }

    .edit-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 24px;
    }

    .edit-button {
        display: inline-block;
        padding: 11px 16px;
        border: 0;
        border-radius: 7px;
        font: inherit;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
    }

    .edit-button-cancel {
        border: 1px solid #cbd5e1;
        background: #fff;
        color: #334155;
    }

    .edit-button-save {
        background: #1473e6;
        color: #fff;
    }
</style>

<div class="edit-page">
    <div class="edit-card">
        <h1>Edit Data Mahasiswa</h1>
        <p class="edit-description">Ubah informasi mahasiswa di bawah ini.</p>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('mahasiswa.update', $data->nim) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="edit-field">
                <label for="nim">NIM</label>
                <input id="nim" value="{{ $data->nim }}" readonly>
            </div>

            <div class="edit-field">
                <label for="nama">Nama</label>
                <input id="nama" name="nama"
                       value="{{ old('nama', $data->nama) }}" required>
                @error('nama')
                    <span class="edit-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="edit-field">
                <label for="jk">Jenis Kelamin</label>
                <select id="jk" name="jk" required>
                    <option value="L" @selected(old('jk', $data->jk) === 'L')>Laki-laki</option>
                    <option value="P" @selected(old('jk', $data->jk) === 'P')>Perempuan</option>
                </select>
                @error('jk')
                    <span class="edit-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="edit-field">
                <label for="prodi">Program Studi</label>
                <input id="prodi" name="prodi"
                       value="{{ old('prodi', $data->prodi) }}" required>
                @error('prodi')
                    <span class="edit-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="edit-field">
                <label for="no_telp">Nomor Telepon</label>
                <input id="no_telp" name="no_telp"
                       value="{{ old('no_telp', $data->no_telp) }}" required>
                @error('no_telp')
                    <span class="edit-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="edit-field">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" required>{{ old('alamat', $data->alamat) }}</textarea>
                @error('alamat')
                    <span class="edit-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="edit-actions">
                <a href="{{ route('mahasiswa.index') }}"
                   class="edit-button edit-button-cancel">Batal</a>
                <button type="submit"
                        class="edit-button edit-button-save">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection