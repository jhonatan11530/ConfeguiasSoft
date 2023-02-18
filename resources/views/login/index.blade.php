<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="{{ url('css/fonts.min.css') }}">
    <link rel="shortcut icon" href="https://www.confeguias.com/wp-content/uploads/2022/01/cropped-logo.jpeg"
        type="image/png">
</head>
<style>
    html,
    body {
        height: 100%;
    }

    .image {
        background-image: url('img/login.jpeg');
        background-size: 100%;
    }
</style>

<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-sm-8 image"></div>
            <div class="col-sm-4 text-center align-self-center">
                <form class="login100-form validate-form" action="validar" method="POST" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="col-sm-12">
                        <i class="fas fa-user-circle mb-3" style="font-size: 8rem;color: #0275d8"></i>
                        <p class="h3">Ingresa a tu cuenta</p>
                    </div>
                    <div class="col-sm-12 form-group">
                        {!! Form::label('Correo electrónico', 'Correo electrónico') !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'required', 'autofocus']) !!}
                    </div>
                    <div class="col-sm-12 form-group mb-3">
                        {!! Form::label('Contraseña', 'Contraseña') !!}
                        {!! Form::password('password', ['class' => 'form-control', 'required', 'placeholder' => 'Contraseña']) !!}
                    </div>
                    <div class="col-sm-12">
                        <button class="btn btn-primary btn-lg btn-block mb-5">INGRESAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
