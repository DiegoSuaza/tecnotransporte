@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <div class="card">
                <h1 class="card-header text-center">{!! trans('general.gest') !!}</h1>

                <div class="card-body col-12 row" style="margin: 0">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-12 col-md-6 col-lg-4 mx-auto">
                        <div class="card text-white bg-primary " style="padding: 0">
                            <h2 class="card-header">{!! trans('general.company') !!}</h2>
                            <div class="card-body">
                                <h3 class="card-title">{{$company}}</h3>
                                <p class="card-text"><a href="{{route('compania')}}" style="color: white">{!! trans('general.list') !!}</a> </p>
                            </div>              
                        </div>                        
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mx-auto">
                        <div class="card text-white bg-success" style="padding: 0">
                            <h2 class="card-header">{!! trans('general.employee') !!}</h2>
                            <div class="card-body">
                                <h3 class="card-title">{{$employee}}</h3>
                                <p class="card-text"><a href="{{route('empleado')}}" style="color: white">{!! trans('general.list') !!}</a> </p>
                            </div>              
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
