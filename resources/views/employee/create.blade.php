@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <div class="card">
                <h1 class="card-header text-center">Creación de empleados</h1>
                <div class="card-body ">
                    <form method="POST" action="{{route('registrar-empleado')}}" class="row">
                        @csrf
                      <div class="form-group col-12 col-md-6">
                        <h3>Nombre</h3>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                      </div>
                      <div class="form-group col-12 col-md-6">
                        <h3>Apellido</h3>
                        <input type="text" class="form-control" name="last_name" value="{{old('last_name')}}">
                      </div>
                      <div class="form-group col-12 col-md-6">
                        <h3 >Email</h3>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}">
                      </div>
                      <div class="form-group col-12 col-md-6">
                        <h3 >Teléfono</h3>
                        <input type="number" class="form-control" name="phone" min="999999" max="9999999999" value="{{old('phone')}}">
                      </div>  
                      <div class="form-group col-12 col-md-6">
                        <h3 >Compañia</h3>
                        <select class="form-control" name="company" value="{{old('company')}}">
                          <option selected disabled>Seleccione la compañia</option>                          
                          @foreach($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>                            
                          @endforeach
                        </select>
                      </div>   
                      <div class="col-12">
                        <button class="col-12 col-md-6 col-lg-2 mx-auto btn btn-primary">Registrar</button>
                                      
                      </div>                
                    </form>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection