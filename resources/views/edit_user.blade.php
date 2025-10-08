@extends('layouts.app')

@section('title', 'Редактирование пользователя')

@section('content')
    <div class="container mt-5">
        <h2>Редактирование пользователя #{{ $user->id }}</h2>

        <form action="{{ route('update_user', $user->id) }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label class="form-label">Имя</label>
                <input type="text" name="first_name" value="{{ old('first_name', $user->first_name) }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Фамилия</label>
                <input type="text" name="last_name" value="{{ old('last_name', $user->last_name) }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Возраст</label>
                <input type="number" name="age" value="{{ old('age', $user->age) }}" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Сохранить</button>
            <a href="{{ route('show_all_users_in_db') }}" class="btn btn-secondary">Назад</a>
        </form>
    </div>
@endsection
