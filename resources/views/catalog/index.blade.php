<!DOCTYPE>
<html>
    <head>
        <title>Branch</title>
    </head>
    <body>
        <h1>Brand</h1>
        @foreach ($brands as $brand)
            <p>This is brand {{$brand -> id}} : {{$brand -> name}} </p>
        @endforeach
    </body>
</html>