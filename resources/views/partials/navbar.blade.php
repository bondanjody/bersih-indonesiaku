<div class="d-flex justify-content-center">
    <img src="{{ asset('img/bersih-indonesiaku-logo.png') }}" alt="logo.png" />
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-white">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark {{ $active === 'home' ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark  {{ $active === 'about' ? 'active' : '' }}" href="/about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark  {{ $active === 'posts' ? 'active' : '' }}" href="/posts">Jelajahi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark  {{ $active === 'categories' ? 'active' : '' }}"
                        href="/categories">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark  {{ $active === 'ranking' ? 'active' : '' }}"
                        href="/ranking">Ranking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark  {{ $active === 'cuan' ? 'active' : '' }}"
                        href="/cuan">Cuan</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome Back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i>
                                    My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item btn btn-dark"><i
                                            class="bi bi-box-arrow-in-right"></i> Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
