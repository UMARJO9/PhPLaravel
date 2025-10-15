@extends('layouts.app')

@section('title', 'Все пользователи')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('content')
<div class="container mt-4">
    <h1 class="mb-4 text-center">Список пользователей</h1>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <div class="mb-3 text-center">
        <input type="text" id="search" class="form-control w-50 mx-auto" placeholder="🔍 Поиск по имени или email...">
    </div>

    <div class="table-wrapper mx-auto">
        <div class="table-responsive">
            <table class="custom-table">
                <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Email</th>
                    <th class="text-center">Возраст</th>
                    <th class="text-center">Статус</th>
                    <th>Создан</th>
                    <th class="text-center">Редактировать</th>
                    <th class="text-center">Удалить</th>
                </tr>
                </thead>
                <tbody id="user-table-body">
                    @include('partials.users_table_body', ['result' => $result])
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- JS для AJAX поиска --}}
<script>
document.getElementById('search').addEventListener('input', function () {
    const query = this.value;
    fetch(`{{ route('users.search') }}?q=${encodeURIComponent(query)}`)
        .then(response => response.text())
        .then(html => {
            document.getElementById('user-table-body').innerHTML = html;
        });
});
</script>
@endsection
