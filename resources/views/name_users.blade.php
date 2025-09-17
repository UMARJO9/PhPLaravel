<h1>Толыко Имена</h1>
<table border="1" cellpadding="5">
    <thead>
    <tr>
        <th>Fisrt Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($result as $u)
        <tr>
            <td>{{ $u-> first_name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
