<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoja de vida</title>
</head>

<body>
    @php
        //var_dump($Registro->all());
    @endphp
    <div class="cv">
        <h1>HOJA DE VIDA</h1>
    </div>
    <div class="foto">
        <img src="{{$Registro["AdjuntarFoto"]}}" alt="Not Found"
            width="250" height="250">
    </div>
    <div class="Descripcion">
        <label style="color: red">DESCRIPCION PROFESIONAL</label>
        <p>{{$Registro["DescripcionPerfil"]}}</p>
    </div>
    <div class="Name">
        <label style="color: red">Nombre Completo :</label>
        <p><span>{{$Registro["Nombre"]}} {{$Registro["Apellido"]}}</span></p>
        <label style="color: red">Tipo De identificacion :</label>
        <p>{{$Registro["TipoIdentificacion"]}}</p>
        <p>CC: <span>{{$Registro["NumeroIdentificacion"]}}</span></p>
        <label style="color: red">Ubicacion</label>
        <p>Departamento : <span>{{$Registro["Departamento"]}}</span></p>
        <p>Ciudad : <span>{{$Registro["Ciudad"]}}</span></p>
        <label style="color: red">Datos de Contacto</label>
        <p>Celular : <span>{{$Registro["Celular"]}}</span></p>
        <p>Telefono : <span>{{$Registro["TelefonoFijo"]}}</span></p>
        <label style="color: red">Datos de Tarjeta Profesional</label>
        <p>N° Tarjeta Profesional : <span>{{$Registro["TarjetaProfesional"]}}</span></p>
        <p>Visualizar Tarjeta : <a href="/{{$Registro["AdjuntoTarjetaProfesional"]}}" target="_blank">Ver Tarjeta Profesional</a></p>
        <label style="color: red">Datos de Registro de Guia de Turismo</label>
        <p>N° Guia Profesional : <span>{{$Registro["NGuiaRegistro"]}}</span></p>
        <p>Visualizar Tarjeta : <a href="/{{$Registro["DocumentoGuiaRegistro"]}}" target="_blank">Ver Registro Guia de Turismo</a></p>
    </div>
</body>
<style>
    span {
        text-transform: capitalize;
    }

    .Descripcion {
        position: absolute;
        display: flex;
        justify-content: center;
        max-width: 300px;
        height: 200px;
        right: 80px;
        top: 80px;
    }

    .cv {
        position: relative;
        text-align: center;
    }

    .foto {
        position: relative;
        top: 0px;
        bottom: 0px;
    }

    .Name {
        position: relative;
        bottom: 0px;
        top: 10px;

    }
</style>

</html>
