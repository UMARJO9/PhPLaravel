<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
<nav>
    <a href="{{ route('all_users') }}">Get All user</a> |
    <a href="{{ route('name_user') }}">Name User </a>
    <a href="{{ route('old_user') }}">Old User </a>
</nav>
<hr>
<main>
    @yield('content')
</main>
</body>
</html>
