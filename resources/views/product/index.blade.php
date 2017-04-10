<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
</head>
<body>
<h2>Product Information</h2>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Product Name</th>
        <th>Price</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{$product -> id}}</td>
            <td>{{$product -> name}}</td>
            <td>{{$product -> price}} $</td>
        </tr>
    @endforeach
</table>
</body>
</html>
