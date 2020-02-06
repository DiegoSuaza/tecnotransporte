@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <div class="card">
                <h1 class="card-header text-center">Editar empleado</h1>
                <div class="card-body ">
                    <form method="POST" action="{{route('update-empleado', $employee->id)}}" class="row">
                        @csrf
                        {{method_field('PUT')}}
                      <div class="form-group col-12 col-md-6">
                        <h3>Nombre</h3>
                        <input type="text" class="form-control" name="name" value="{{$employee->name}}">
                      </div>
                      <div class="form-group col-12 col-md-6">
                        <h3>Apellido</h3>
                        <input type="text" class="form-control" name="last_name" value="{{$employee->last_name}}">
                      </div>
                      <div class="form-group col-12 col-md-6">
                        <h3 >Email</h3>
                        <input type="email" class="form-control" name="email" value="{{$employee->email}}">
                      </div>
                      <div class="form-group col-12 col-md-6">
                        <h3 >Teléfono</h3>
                        <input type="number" class="form-control" name="phone" min="999999" max="9999999999" value="{{$employee->phone}}">
                      </div>  
                      <div class="form-group col-12 col-md-6">
                        <h3 >Compañia</h3>
                        <select class="form-control" name="company">
                          <option selected disabled>Seleccione la compañia</option>                          
                          @foreach($companies as $company)
                            <option value="{{$company->id}}" @if( $company->id == $employee->id_companies) selected @endif >{{$company->name}}</option>                            
                          @endforeach
                        </select>
                      </div>   
                      <div class="col-12">
                        <button class="col-12 col-md-6 col-lg-2 mx-auto btn btn-primary">Actualizar</button>
                                      
                      </div>                
                    </form>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection