@extends('layouts.app')

@section('title', 'Old User')

@section('content')
<table border="1" cellpadding="5">
    <thead>
    <tr>
        <th>Кол</th>
    </tr>
    </thead>
    <tbody>
            <td>{{ $result}}</td>
        </tr>
    </tbody>
</table>
@endsection
