@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md bg-warning">
    <div class="container">
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">

            <!-- Left Side Navbar -->
            <ul class="navbar-nav flex-row flex-wrap">
                @auth
                    <!-- Menu untuk pengguna yang sudah login -->
                    <li class="nav-item col-2 col-md-auto">
                        <a href="{{ route('home') }}" class="nav-link @if ($currentRouteName == 'home') active @endif">
                            Home
                        </a>
                    </li>
                    <li class="nav-item col-2 col-md-auto">
                        <a href="{{ route('tasks.index') }}"
                            class="nav-link @if ($currentRouteName == 'tasks.index') active @endif">
                            Your-Task
                        </a>
                    </li>
                @endauth
            </ul>

            <!-- Right Side Navbar -->
            <ul class="navbar-nav ms-auto">
                @guest
                    <!-- Menu untuk pengguna yang belum login -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <!-- Dropdown menu untuk pengguna yang sudah login -->
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
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
</nav>
