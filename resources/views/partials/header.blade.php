<style>
    .site-header {
        width: 100%;
        margin: 0;
        padding: 0;
        background: #0d6efd !important;
        box-shadow: 0 3px 10px rgb(15 23 42 / 15%);
    }

    .site-nav {
        width: min(100% - 48px, 1410px);
        min-height: 76px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 30px;
    }

    .site-brand,
    .site-nav-links a {
        color: #fff !important;
        text-decoration: none !important;
        font-family: Arial, sans-serif;
    }

    .site-brand {
        font-size: 23px;
        font-weight: 700;
        white-space: nowrap;
    }

    .site-nav-links {
        display: flex;
        align-items: center;
        gap: 25px;
    }

    .site-nav-links a {
        font-size: 16px;
    }

    .site-nav-links a:hover {
        opacity: 0.8;
    }

    .site-nav-links .site-nav-data {
        padding: 10px 14px;
        border: 1px solid rgb(255 255 255 / 45%);
        border-radius: 7px;
        background: rgb(255 255 255 / 12%);
    }

    @media (max-width: 850px) {
        .site-nav {
            width: calc(100% - 32px);
            padding: 16px 0;
            align-items: flex-start;
            flex-direction: column;
            gap: 15px;
        }

        .site-nav-links {
            flex-wrap: wrap;
            gap: 12px 20px;
        }
    }
</style>

<header class="site-header">
    <nav class="site-nav">
        <a class="site-brand" href="{{ url('/') }}">
            UNPAM - Prodi Sistem Informasi
        </a>

        <div class="site-nav-links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/profile') }}">Profile</a>
            <a href="{{ url('/news') }}">News</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/contact') }}">Contact</a>
            <a class="site-nav-data" href="{{ route('mahasiswa.index') }}">
                Data Mahasiswa
            </a>
        </div>
    </nav>
</header>