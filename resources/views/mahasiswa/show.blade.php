@extends('layouts.main')

@section('title', 'Detail Mahasiswa')

@section('content')
<style>
    .detail-page {
        max-width: 760px;
        margin: 32px auto;
        padding: 0 16px;
    }

    .detail-card {
        padding: 30px;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        background: #fff;
        box-shadow: 0 6px 20px rgba(15, 23, 42, .08);
    }

    .detail-card h1 {
        margin: 0 0 6px;
        color: #1e293b;
        font-size: 26px;
    }

    .detail-description {
        margin: 0 0 24px;
        color: #64748b;
    }

    .detail-list {
        border-top: 1px solid #e2e8f0;
    }

    .detail-row {
        display: grid;
        grid-template-columns: 180px 1fr;
        gap: 20px;
        padding: 15px 10px;
        border-bottom: 1px solid #e2e8f0;
    }

    .detail-label {
        color: #64748b;
    }

    .detail-value {
        color: #1e293b;
        font-weight: 600;
        overflow-wrap: anywhere;
    }

    .detail-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 24px;
    }

    .detail-button {
        display: inline-block;
        padding: 11px 16px;
        border-radius: 7px;
        font-weight: 600;
        text-decoration: none;
    }

    .detail-back {
        border: 1px solid #cbd5e1;
        background: #fff;
        color: #334155;
    }

    .detail-edit {
        background: #1473e6;
        color: #fff;
    }

    @media (max-width: 600px) {
        .detail-card {
            padding: 22px 16px;
        }

        .detail-row {
            grid-template-columns: 1fr;
            gap: 5px;
        }
    }
</style>

<div class="detail-page">
    <div class="detail-card">
        <h1>Detail Mahasiswa</h1>
        <p class="detail-description">Informasi lengkap mahasiswa.</p>

        <div class="detail-list">
            <div class="detail-row">
                <span class="detail-label">NIM</span>
                <span class="detail-value">{{ $data->nim }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Nama</span>
                <span class="detail-value">{{ $data->nama }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Jenis Kelamin</span>
                <span class="detail-value">
                    {{ $data->jk === 'L' ? 'Laki-laki' : 'Perempuan' }}
                </span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Program Studi</span>
                <span class="detail-value">{{ $data->prodi }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Nomor Telepon</span>
                <span class="detail-value">{{ $data->no_telp }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Alamat</span>
                <span class="detail-value">{{ $data->alamat }}</span>
            </div>
        </div>

        <div class="detail-actions">
            <a href="{{ route('mahasiswa.index') }}" class="detail-button detail-back">
                Kembali
            </a>
            <a href="{{ route('mahasiswa.edit', $data->nim) }}" class="detail-button detail-edit">
                Edit Data
            </a>
        </div>
    </div>
</div>
@endsection