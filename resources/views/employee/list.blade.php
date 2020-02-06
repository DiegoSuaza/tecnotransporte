@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <div class="card">
                <h1 class="card-header text-center">Listado de empleados</h1>
                <div class="card-body table-responsive">
                    <a href="{{route('crear-empleado')}}" class="btn btn-success" style="margin-bottom: 15px">Nuevo empleado</a>
                    <table id="example1" class="table table-bordered table-striped table-hover table-sm" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Compañia</th>                        
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody> 
                            @foreach($employees as $employee)
                            <tr>
                                <td>{{$employee->name}} {{$employee->last_name}}</td>
                                <td>{{$employee->company->name}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->phone}}</td>
                                <td style="text-align: center"> 
                                    <a href="{{route('editar-empleado', $employee->id)}}" title="Editar" class="btn btn-info" style="color: white">Editar</a> 
                                    <a href="{{route('eliminar-empleado', $employee->id)}}" title="Eliminar" class="btn btn-danger">Eliminar</a> 
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
@endsection
