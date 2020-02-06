@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <div class="card">
                <h1 class="card-header text-center">Listado de compañias</h1>
                <div class="card-body table-responsive">
                    <a href="{{route('crear-compania')}}" class="btn btn-success" style="margin-bottom: 15px">Nueva compañia</a>
                    <table id="example1" class="table table-bordered table-striped table-hover table-sm" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Logo</th>
                                <th>Nombre</th>                        
                                <th>Email</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody> 
                            @foreach($companies as $company)
                            <tr>
                                <td style="text-align: center"><img src="{{asset('storage')}}/{{$company->logo}}" width="50px"></td>
                                <td>{{$company->name}}</td>
                                <td>{{$company->email}}</td>
                                <td style="text-align: center"> 
                                    <a href="{{route('editar-compania', $company->id)}}" title="Editar" class="btn btn-info" style="color: white">Editar</a> 
                                    <a href="{{route('eliminar-compania', $company->id)}}" title="Eliminar" class="btn btn-danger">Eliminar</a> 
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
