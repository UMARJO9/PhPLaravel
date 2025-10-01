<h1>Users Age > 10 </h1>
<table border="1">
    <thead>
    <tr>
        <th> Id </th>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($result as $u)
        <tr>
            <td>{{$u-> id}}</td>
            <td>{{$u-> first_name}}</td>
            <td>{{$u-> last_name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
