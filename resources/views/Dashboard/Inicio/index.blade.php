@extends('Dashboard.Layout/plantilla')
@section('page-inner')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-7 fw-bold mb-5">Estadisticas En Tiempo Real</h2>
        </div>
    </div>
@endsection
@section('content')
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="multi-filter-select" class="display table table-striped table-hover">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>id</th>
                                        <th>Nombre Completo</th>
                                        <th>Ubicacion</th>
                                        <th>Numero Identificacion</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($RegistroUsuario as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->Nombre}} {{$item->Apellido}}</td>
                                        <td>{{$item->Departamento}} - {{$item->Ciudad}}</td>
                                        <td>{{$item->NumeroIdentificacion}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    Acciones
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="/pdf/{{$item->id}}">Visualizar</a>
                                                    <a class="dropdown-item" data-toggle="modal"
                                                        href="#">Exportar</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
