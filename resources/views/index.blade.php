<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confeguias</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="https://www.confeguias.com/wp-content/uploads/2022/01/cropped-logo.jpeg"
        type="image/png">
</head>

<body>
    <style>
        body {
            background-image: url('img/login.jpeg');
            background-size: 100%;
        }

        .container {
            width: 100%;
            height: 150px;
            border-radius: 5px;
            padding: 30px;
            margin: auto;
            margin-top: 20px;
        }
    </style>
    <div class="container text-center text-white">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="https://www.confeguias.com/wp-content/uploads/2022/01/captura-logo-horizontal.png"
                    width="100%" height="200px" alt="image not found">
                <h1>Bienvenido a Confeguias</h1>
            </div>
            <div class="col-sm-6">
                <div class="card bg-primary mb-3">
                    <div class="card-header">Registro de Turistas</div>
                    <div class="card-body">
                        <h5 class="card-title">Si usted es guia de turista</h5>
                        <p class="card-text">Puede registrarse en nuestro sistema</p>
                        <a href="/RegistroTurista" class="btn btn-danger stretched-link">Registrarse</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card bg-primary mb-3">
                    <div class="card-header">Iniciar Sesión En el Sistema</div>
                    <div class="card-body">
                        <h5 class="card-title">Si usted ya esta registrado en nuestro sistema</h5>
                        <p class="card-text">por favor ingrese al sistema</p>
                        <a href="/login" class="btn btn-danger stretched-link">Iniciar Sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
