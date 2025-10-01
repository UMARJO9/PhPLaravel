<h1>All Users In Db</h1>
<table border="1">
    <thead>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($result as $u)
        <tr>
            <td>{{$u-> first_name}}</td>
            <td>{{$u-> last_name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
