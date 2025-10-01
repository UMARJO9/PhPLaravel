<h1>Ползователи Старше 25</h1>
<table border="1" cellpadding="5">
    <thead>
    <tr>
        <th>id</th>
        <th>Fisrt Name</th>
        <th>Last Name</th>
        <th>Age</th>
    </tr>
    </thead>
    <tbody>
    @foreach($result as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u-> first_name}}</td>
            <td>{{ $u-> last_name}}</td>
            <td>{{ $u-> age}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
