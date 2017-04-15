<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <h2>Catalog</h2>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Catalog Name</th>
            </tr>
                @foreach ($catalogs as $catalog)
                <tr>
                    <td>{{$catalog -> id}}</td>
                    <td><a href="catalog/{{$catalog ->id}}/products">{{$catalog -> name}}</a></td>
                </tr>
            @endforeach
        </table>

        <div>
            <h1>Content</h1>
            @foreach($catalogs as $catalog)
                <p>
                    <div>{{$catalog -> name}}</div>
                    <table border="1">
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                        </tr>
                        @foreach($catalog->products as $product)
                            <tr>
                                <td>{{$product -> id}}</td>
                                <td><img src="images/{{$product -> thumbnail}}" style="width: 50%; height: 50%"></td>
                                <td>{{$product -> name}}</td>
                                <td>{{$product -> price}}</td>
                            </tr>
                        @endforeach
                    </table>
                </p>
            @endforeach
        </div>
    </body>
</html>
