@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md bg-warning">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1">
            <img src="https://d29fhpw069ctt2.cloudfront.net/icon/image/74170/preview.svg"
                alt="Logo" class="me-2" style="width: 40px; height: 40px;">
            Do-ty List
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto">
                    <a href="{{ route('home') }}" class="nav-link @if ($currentRouteName == 'home') active @endif">
                        Home
                    </a>
                </li>
                <li class="nav-item col-2 col-md-auto">
                    <a href="{{ route('tasks.index') }}"
                        class="nav-link @if ($currentRouteName == 'barang.index') active @endif">
                        Your-Task
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
