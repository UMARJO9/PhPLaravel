<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('add_users')) active @endif"
                       href="{{ route('add_users') }}">
                        Add User in Database
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('show_all_users_in_db')) active @endif"
                       href="{{ route('show_all_users_in_db') }}">
                        Show All Users in Database
                    </a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link @if(request()->routeIs('action_users.blade.php')) active @endif"--}}
{{--                       href="{{ route('old_user') }}">--}}
{{--                        Action Users--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>
</nav>

<hr>

<main class="container mt-4">
    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
