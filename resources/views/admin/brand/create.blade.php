<html>
    <head>
        <title>Create New Brand</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script type="application/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Create New Brand</h1>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!! Form::open(array('route' => 'store.brand', 'class' => 'form')) !!}
            <div class="form-group">
                {!! Form::label('Brand Name') !!}
                {!! Form::text('name', '', array('class' => 'form-control', 'placeholder' => "Brand name")) !!}
            </div>
            {!! Form::submit('Create', array('class' => 'btn btn-primary') ) !!}

            {!! Form::close() !!}
        </div>
    </body>
</html>