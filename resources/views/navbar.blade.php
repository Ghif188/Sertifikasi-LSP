<nav class="navbar navbar-expand-lg bg-dark"data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav g-3">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'pilih' ? 'active' : (Route::currentRouteName() == 'daftar' ? 'disabled' : '') }}"
                        href={{ route('pilih') }}>Pilihan
                        Beasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'daftar' ? 'active' : 'disabled' }}"
                        href={{ route('daftar') }}>Daftar Beasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'hasil' ? 'active' : '' }}"
                        href={{ route('hasil') }}>Hasil</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
