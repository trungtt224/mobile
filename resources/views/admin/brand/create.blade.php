<html>
    <head>
        <title>Create New Brand</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script type="application/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Create New Brand</h1>
            {!! Form::open(array('route' => 'createBrand', 'class' => 'form')) !!}
            <div class="form-group">
                {!! Form::label('Brand Name') !!}
                {!! Form::text('name', null, array('required', 'class' => 'form-control', 'placeholder' => "Brand name")) !!}
            </div>
            {!! Form::submit('Submit', array('class' => 'btn btn-primary') ) !!}

            {!! Form::close() !!}
        </div>
    </body>
</html>