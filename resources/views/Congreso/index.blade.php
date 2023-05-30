<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro De Guias Nacional</title>
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
        .container {
            opacity: 0.90;
            width: 100%;
            height: 150px;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 30px;
            margin: auto;
            margin-top: 20px;
        }

        .floating {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 30%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);
            padding: 12px 16px;
            font-size: 24px;
            cursor: pointer;
        }
    </style>
    <div class="container mb-5">
        {!! Form::open(['url' => 'Congreso']) !!}
        <img src="https://www.confeguias.com/wp-content/uploads/2022/01/captura-logo-horizontal.png" width="100%"
            height="200px" alt="image not found">
        <p class="text-center">DATOS PERSONALES</p>
        <div class="row mb-3">
            <div class="col-sm-6">
                <label>Nombre</label> <span style="color: red">*</span>
                {!! Form::text('Nombre', null, ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="col-sm-6">
                <label>Apellido</label> <span style="color: red">*</span>
                {!! Form::text('Apellido', null, ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="col-sm-6">
                <label>Tipo de identificación</label> <span style="color: red">*</span>
                {!! Form::select(
                    'Tipo',
                    [
                        'Cédula de ciudadanía' => 'Cédula de ciudadanía',
                        'Tarjeta de identidad' => 'Tarjeta de identidad',
                        'Registro civil' => 'Registro civil',
                        'Pasaporte' => 'Pasaporte',
                        'Cédula de extranjería' => 'Cédula de extranjería',
                        'Permiso especial de permanencia (PEP)' => 'Permiso especial de permanencia (PEP)',
                        'Salvoconducto de permanencia' => 'Salvoconducto de permanencia',
                        'Tarjeta de movilidad fronteriza' => 'Tarjeta de movilidad fronteriza',
                        'Permiso temporal de permanencia (PTP)' => 'Permiso temporal de permanencia (PTP)',
                        'Tarjeta de registro de migración' => 'Tarjeta de registro de migración',
                        'Tarjeta de registro consular' => 'Tarjeta de registro consular',
                        'Tarjeta de refugiado' => 'Tarjeta de refugiado',
                        'Permiso de ingreso y permanencia (PIP)' => 'Permiso de ingreso y permanencia (PIP)',
                        'Permiso de ingreso especial (PIE)' => 'Permiso de ingreso especial (PIE)',
                        'Documento de identificación para la justicia penal militar' =>
                            'Documento de identificación para la justicia penal militar',
                    ],
                    null,
                    ['class' => 'form-control', 'required'],
                ) !!}
            </div>
            <div class="col-sm-6">
                <label>Numero de documento de identificación</label> <span style="color: red">*</span>
                {!! Form::number('Correo', null, ['class' => 'form-control', 'min' => '0', 'required']) !!}
            </div>
            <div class="col-sm-6">
                <label>Número de RNT</label> <span style="color: red">*</span>
                {!! Form::number('Correo', null, ['class' => 'form-control', 'min' => '0', 'required']) !!}
            </div>
            <div class="col-sm-6">
                <label>Celular</label> <span style="color: red">*</span>
                {!! Form::number('Correo', null, ['class' => 'form-control', 'min' => '0', 'required']) !!}
            </div>
            <div class="col-sm-6">
                <label>Correo electrónico</label> <span style="color: red">*</span>
                {!! Form::email('Correo', null, ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="col-sm-6">
                <h5>¿Es guía agremiado?</h5>
                <input type="radio" name="opcion" value="Si" id="opcionSi" onclick="mostrarCampoTexto()">Sí<br>
                <input type="radio" name="opcion" value="No"  id="opcionNo" onclick="mostrarCampoTexto()">No<br><br>
                <div id="campoTexto" style="display: none;">
                    <label for="texto">por favor indique el nombre de la asociación a la que pertenece.</label> <span
                        style="color: red">*</span>
                    {!! Form::text('asociacion', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        {!! Form::submit('Enviar Datos', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
        </form>
    </div>
    <button class="floating"><span><a href="https://www.confeguias.com/" style="color: white">Atras</a></span></button>
    <script>
        function mostrarCampoTexto() {
            var campoTexto = document.getElementById("campoTexto");
            var radioOpcion = document.getElementById("opcionSi");

            if (radioOpcion.checked) {
                campoTexto.style.display = "block"; // Mostrar el campo de entrada
            } else {
                campoTexto.style.display = "none"; // Ocultar el campo de entrada
            }
        }
    </script>
</body>

</html>
