@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <div class="card">
                <h1 class="card-header text-center">Creación de compañias</h1>
                <div class="card-body ">
                    <form method="POST" action="{{route('registrar-compania')}}" class="row" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group col-12 col-md-6">
                        <h3>Nombre</h3>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                      </div>
                      <div class="form-group col-12 col-md-6">
                        <h3 >Email</h3>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}">
                      </div>
                      <div class="form-group col-12">
                           <h3>Logo:</h3>
                            <div class="col-md-12 border border-success text-center p-3">
                                <h6 id="tilogo"></h6>
                                <div class="dropzone col-md-12">
                                    <label>
                                        <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
                                    </label>
                                    <input type="file" class="upload-input" id="logo" name="logo" accept="image/png">
                                </div>
                            </div>
                        </div>
                      <button class="col-12 col-md-6 col-lg-2 mx-auto btn btn-primary">Registrar</button>
                    </form>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection