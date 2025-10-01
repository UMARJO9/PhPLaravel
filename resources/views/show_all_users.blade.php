@extends('layouts.app')

@section('title', 'Get All User In Db')

@section('content')
    <table border="1" cellpadding="5">
        <thead>
        <tr>
            <th>id</th>
            <th>User</th>
        </tr>
        </thead>
        <tbody>
        @foreach($result as $u)
            <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u-> first_name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
