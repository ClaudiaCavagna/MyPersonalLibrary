<nav class="navbar navbar-expand-lg color-light">
    <div class="container-fluid mx-5">
        <a class="navbar-brand" href="{{route('homepage')}}">Shared Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="justify-content-end mx-5">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @auth
                    <li class="nav-item icons">
                        <a class="nav-link @if (Route::CurrentRouteName()=='books.index') active @endif" href="{{route('books.index')}}">
                            Libri
                        </a>
                    </li>
                    <li class="nav-item icons">
                        <a class="nav-link @if (Route::CurrentRouteName()=='books.create') active @endif" href="{{route('books.create')}}">
                            <i class="bi bi-plus-circle-fill"></i>
                        </a>
                    </li>
                    <li class="nav-item icons">
                        <a class="nav-link @if (Route::CurrentRouteName()=='authors.index') active @endif" href="{{route('authors.index')}}">
                            Autori
                        </a>
                    </li>
                    <li class="nav-item icons">
                        <a class="nav-link @if (Route::CurrentRouteName()=='authors.create') active @endif" href="{{route('authors.create')}}">
                            <i class="bi bi-plus-circle-fill"></i>
                        </a>
                    </li>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenuto {{Auth::user()->name}}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profilo</a></li>
                            <hr>
                            <li>
                                <a class="dropdown-item text-uppercase" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                            </li>
                            <form action="{{route('logout')}}" method="POST" id="form-logout" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                    @else
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenuto utente
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item @if (Route::CurrentRouteName()=='login') active-dropdown @endif" href="{{route('login')}}">Accedi</a>
                            </li>
                            <hr>
                            <li>
                                <a class="dropdown-item @if (Route::CurrentRouteName()=='register') active-dropdown @endif" href="{{route('register')}}">Registrati</a>
                            </li>
                        </ul>
                    </div>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>