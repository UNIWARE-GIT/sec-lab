<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/"
                class="navbar-brand d-flex gap-2 align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="{{asset('/storage/img_res/favicon.png')}}" class="img rounded" alt="">
                <span class="text-warning">SEC</span>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 mx-auto justify-content-center mb-md-0 gap-2">
                <li class="nav-item">
                    <a href="#" class="nav-link px-2 text-white">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link @guest disabled @endguest text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Seguimiento de Ventas
                    </a>
                    <ul class="dropdown-menu text-center dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Diario</a></li>
                        <li><a class="dropdown-item" href="#">Mensual</a></li>
                        <li><a class="dropdown-item" href="#">Anual</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">?</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link @guest disabled @endguest text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Seguimiento de Presupuestos
                    </a>
                    <ul class="dropdown-menu text-center dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Regional</a></li>
                        <li><a class="dropdown-item" href="#">Nacional</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">?</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link @guest disabled @endguest px-2 text-white">Seguimiento de Inventarios</a>
                </li>
            </ul>
            <div class="text-end">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 mx-auto justify-content-center mb-md-0">
                @guest
                @if (Route::has('login'))
                <li class="nav-item text-muted">
                    <i>
                        No Autenticado!
                    </i>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-secondary" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
                </ul>
            </div>
        </div>
    </div>
</header>