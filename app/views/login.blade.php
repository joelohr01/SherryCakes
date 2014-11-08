<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sherry Cakes</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    {{ Form::open(array('url' => 'login')) }}
        <h1>Login</h1>
        <p>
            {{ $errors->first('email') }}
            {{ $errors->first('password') }}
        </p>
        <p>
            {{ Form::label('email', 'Email Address') }}
            {{ Form::text('email', Input::old('email'), array('placeholder' => 'Email Address')) }}
        </p>
        <p>
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password') }}
        </p>
        <p>
            {{ Form::submit('Submit') }}
        </p>
    {{ Form::close() }}
</body>
</html>