@extends('layouts.app')

@section('title', 'Все пользователи')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-center">Список пользователей</h1>

        <div class="table-wrapper mx-auto">
            <div class="table-responsive">
                <table class="custom-table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Email</th>
                        <th>Возраст</th>
                        <th>Статус</th>
                        <th>Создан</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($result as $u)
                        <tr>
                            <td class="text-center">{{ $u->id }}</td>
                            <td>{{ $u->first_name }}</td>
                            <td>{{ $u->last_name }}</td>
                            <td>{{ $u->email }}</td>
                            <td class="text-center">{{ $u->age }}</td>
                            <td class="text-center">
                                @if($u->is_active)
                                    <span class="badge badge-success px-3 py-2">Активен</span>
                                @else
                                    <span class="badge badge-danger px-3 py-2">Не активен</span>
                                @endif
                            </td>
                            <td class="text-muted">{{ $u->created_at->format('d.m.Y H:i') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
