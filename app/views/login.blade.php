<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sherry Cakes</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"/>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row-fluid user-row">
                            <img src="images/logo.png" class="img-responsive" alt="Sherry Cakes"/>
                        </div>
                    </div>
                    <div class="panel-body">
                        {{ Form::open(array('url' => 'login', 'role' => 'form', 'class' => 'form-signin')) }}
                            <p>
                                {{ $errors->first('username') }}<br>
                                {{ $errors->first('password') }}
                            </p>
                            <fieldset>
                                <label class="panel-login">
                                    <div class="login_result"></div>
                                </label>
                                {{ Form::text('username', Input::old('username'), array('id' => 'username', 'class' => 'form-control', 'placeholder' => 'Username')) }}
                                {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password', 'id' => 'password')) }}
                                <br></br>
                                {{ Form::submit('Login »', array('class' => 'btn btn-lg btn-success btn-block', 'id' => 'login', 'value' => 'Login')) }}
                            </fieldset>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>