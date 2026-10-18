@extends('layouts.main')

@section('title', 'Data Mahasiswa')

@section('content')
<div class="mh-list-page">
    <div class="mh-list-heading">
        <div>
            <h1>Data Mahasiswa</h1>
            <p>Kelola data mahasiswa yang tersimpan.</p>
        </div>

        <a href="{{ route('mahasiswa.create') }}" class="mh-add-button">
            + Tambah Mahasiswa
        </a>
    </div>

    @if (session('success'))
        <div class="mh-alert">{{ session('success') }}</div>
    @endif

    <div class="mh-table-scroll">
        <table class="mh-table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Program Studi</th>
                    <th>No. Telepon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                    <tr>
                        <td class="mh-nim">{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jk === 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td>{{ $item->prodi }}</td>
                        <td>{{ $item->no_telp }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <div class="mh-actions">
                                <a href="{{ route('mahasiswa.show', $item->nim) }}"
                                   class="mh-action mh-detail">Detail</a>

                                <a href="{{ route('mahasiswa.edit', $item->nim) }}"
                                   class="mh-action mh-edit">Edit</a>

                                <form action="{{ route('mahasiswa.destroy', $item->nim) }}"
                                      method="POST"
                                      onsubmit="return confirm('Hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="mh-action mh-delete" type="submit">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="mh-empty">
                            Belum ada data mahasiswa.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection