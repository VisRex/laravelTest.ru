<!DOCTPE html>
<html>
<head>
    <title>View Student Records</title>
</head>
<body>
<table border = "1">
    <tr>
        <td>Id</td>
        <td>First Name</td>
        <td>Last Name</td>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->info }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
