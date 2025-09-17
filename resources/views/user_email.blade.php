<h1>Ползователи c Gmail почтами</h1>
<table border="1" cellpadding="5">
    <thead>
    <tr>
        <th>id</th>
        <th>Fisrt Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($result as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u-> first_name}}</td>
            <td>{{ $u-> email}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
