@extends('Dashboard.Layout/plantilla')
@section('page-inner')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-7 fw-bold mb-5">Editar Usuario</h2>
        </div>
    </div>
@endsection
@section('content')
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-body">
                        {!! Form::model($Registro, ['route' => ['RegistroTurista.update', $Registro->id], 'files' => true]) !!}
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Nombre <span style="color: red">*</span></label>
                                {!! Form::text('Nombre', $Registro->Nombre, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Apellido <span style="color: red">*</span></label>
                                {!! Form::text('Apellido', $Registro->Nombre, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Tipo Identificacion <span style="color: red">*</span></label>
                                <select name="TipoIdentificacion" class="form-control mb-2" required>
                                    <option value="" selected disabled>Seleccione</option>
                                    <option value="Registro civil">Registro civil(RC)</option>
                                    <option value="Tarjeta de identidad">Tarjeta de identidad(TI)</option>
                                    <option value="Cédula de ciudadania">Cédula de ciudadanía(CC)</option>
                                    <option value="Tarjeta de extrangeria">Tarjeta de extranjería(TE)</option>
                                    <option value="Cédula de extrangeria">Cédula de extranjería(CE)</option>
                                    <option value="Número de identificacion tributaria">Número de identificación
                                        tributaria(NIT)
                                    </option>
                                    <option value="Pasaporte">Pasaporte(PP)</option>
                                    <option value="Documento de identificación de extrangero">Documento de
                                        identificación extranjero(DIE)</option>
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Numero Identificacion <span style="color: red">*</span></label>
                                {!! Form::number('NumeroIdentificacion', $Registro->NumeroIdentificacion, [
                                    'class' => 'form-control',
                                    'min' => 0,
                                    'required',
                                ]) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Fecha Expedicion <span style="color: red">*</span></label>
                                {!! Form::date('FechaExpedicion', $Registro->FechaExpedicion, ['class' => 'form-control', 'min' => 0]) !!}
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Departamento <span style="color: red">*</span></label>
                                <select name="departamento" id="depart" class="form-control" required>
                                    <option value="" selected disabled>Seleccione...</option>
                                    @foreach ($Departamento as $key => $val)
                                        <option value="{{ $val->departamento }}">{{ $val->departamento }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Ciudad <span style="color: red">*</span></label>
                                <select id="ciudad" name="ciudad" class="form-control" required>
                                    <option value="" selected disabled>Seleccione...</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Celular <span style="color: red">*</span></label>
                                {!! Form::number('Celular', $Registro->Celular, ['class' => 'form-control', 'min' => 0, 'required']) !!}
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Telefono Fijo <span style="color: red">*</span></label>
                                {!! Form::number('TelefonoFijo', $Registro->TelefonoFijo, ['class' => 'form-control', 'min' => 0, 'required']) !!}
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Adjunto Tarjeta Profesional <span style="color: red">*</span></label>
                                <input type="file" name="TarjetaProfesional" accept="application/pdf"
                                    class="form-control mb-3" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>NGuia Registro <span style="color: red">*</span></label>
                                {!! Form::number('NGuiaRegistro', $Registro->NGuiaRegistro, ['class' => 'form-control', 'min' => 0, 'required']) !!}
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Documento Guia Registro <span style="color: red">*</span></label>
                                <input type="file" name="DocumentoGuiaRegistro" accept="application/pdf"
                                    class="form-control mb-3" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Foto de perfil <span style="color: red">*</span></label>
                                <input type="file" name="AdjuntarFoto" id="fileInput" accept="image/jpeg, image/png"
                                    class="form-control mb-3" required>
                            </div>
                            <div class="form-group col-sm-12">
                                <label>Descripcion Perfil <span style="color: red">*</span></label>
                                {!! Form::textarea('DescripcionPerfil', $Registro->DescripcionPerfil, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="form-group col-sm-12">
                                {!! Form::submit('enviar', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
