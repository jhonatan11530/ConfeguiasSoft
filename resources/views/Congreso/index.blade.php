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
            <div class="form-group col-sm-6">
                <label>Nombre</label> <span style="color: red">*</span>
                {!! Form::text('Nombre', null, ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="form-group col-sm-6">
                <label>Apellido</label> <span style="color: red">*</span>
                {!! Form::text('Apellido', null, ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="form-group col-sm-6">
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
            <div class="form-group col-sm-6">
                <label>Numero de documento de identificación</label> <span style="color: red">*</span>
                {!! Form::number('Tipo', null, ['class' => 'form-control', 'min' => '0', 'required']) !!}
            </div>
            <div class="form-group col-sm-6">
                <label>Número de RNT</label> <span style="color: red">*</span>
                {!! Form::number('RNT', null, ['class' => 'form-control', 'min' => '0', 'required']) !!}
            </div>
            <div class="form-group col-sm-6">
                <label>Celular</label> <span style="color: red">*</span>
                {!! Form::number('Celular', null, ['class' => 'form-control', 'min' => '0', 'required']) !!}
            </div>
            <div class="form-group col-sm-6">
                <label>Correo electrónico</label> <span style="color: red">*</span>
                {!! Form::email('Correo', null, ['class' => 'form-control', 'required']) !!}
            </div>
            <div class="form-group col-sm-2">
                <label>¿Es guía agremiado?</label>
                <input type="radio" name="opcion" value="Si" id="opcionSi" onclick="mostrarCampoTexto()">Sí
                <input type="radio" name="opcion" value="No" id="opcionNo" onclick="mostrarCampoTexto()">No

            </div>
            <div class="form-group col-sm-4">
                <div id="campoTexto" style="display: none;">
                    <label for="texto">Por favor, indique el nombre de la asociación a la que usted pertenece <span
                            style="color: red">*</span></label>
                    <select name="asociacion" id="asociacion" class="form-control">
                        <option value="" selected disabled>Seleccione una opcion</option>
                        @foreach ($Gremio as $gremio)
                            <option value="{{ $gremio->asociaciones }}">{{ $gremio->asociaciones }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        {!! Form::submit('Enviar Datos', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
        </form>
    </div>
    <button class="floating"><span><a href="https://www.confeguias.com/" style="color: white">Atras</a></span></button>

    <!--- MODAL NO EXISTE USUARIO---->
    <div class="modal fade" id="ModalError" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="ModalErrorLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalErrorLabel">Apreciado colega agremiado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="cerrarModal()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Es crucial que completes tu registro en la página web de Confeguias para que podamos contar con un
                    Directorio Nacional completo de Guías de Turismo profesionales. Te invitamos de manera entusiasta a
                    registrarte y posteriormente realizar tu pre-registro para el Congreso. Tu participación es
                    fundamental para el éxito de esta iniciativa.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        onclick="cerrarModal()">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#asociacion').change(function(e) {
            e.preventDefault();
            var numero = $('input[name=Tipo]').val();
            $.ajax({
                type: "POST",
                url: "{{ route('congreso.ajax', ['id' => ':identificacion']) }}".replace(
                    ':identificacion',
                    numero),
                data: {
                    _token: $('input[name="_token"]').val(),
                },
                success: function(response) {
                    if (response == 0) {
                        $('#ModalError').modal('show')
                    } else {
                        alert(
                            'Estimado usuario,\nLe informamos que está registrado en nuestra base de datos.'
                        )
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert('Estimado usuario,\ntodos los campos son obligatorios')
                }
            });
        });


        function cerrarModal() {
            window.location.href = '/RegistroTurista';
        }

        function mostrarCampoTexto() {
            var campoTexto = document.getElementById("campoTexto");
            var radioOpcion = document.getElementById("opcionSi");

            if (radioOpcion.checked) {
                campoTexto.style.display = "block"; // Mostrar el campo de entrada
            } else {
                campoTexto.style.display = "none"; // Ocultar el campo de entrada
                //$('#ModalError').modal('show')
            }
        }
    </script>
</body>

</html>
