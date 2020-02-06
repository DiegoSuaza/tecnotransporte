@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <div class="card">
                <h1 class="card-header text-center">{!! trans('general.list_employee') !!}</h1>
                <div class="card-body table-responsive">
                    <a href="{{route('crear-empleado')}}" class="btn btn-success" style="margin-bottom: 15px">{!! trans('general.new_employee') !!}</a>
                    <table id="example1" class="table table-bordered table-striped table-hover table-sm" style="width: 100%">
                        <thead>
                            <tr>
                                <th>{!! trans('general.name') !!}</th>
                                <th>{!! trans('general.company') !!}</th>                        
                                <th>Email</th>
                                <th>{!! trans('general.phone') !!}</th>
                                <th>{!! trans('general.action') !!}</th>
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
                                    <a href="{{route('editar-empleado', $employee->id)}}" title="{!! trans('general.edit') !!}" class="btn btn-info" style="color: white">{!! trans('general.edit') !!}</a> 
                                    <a href="{{route('eliminar-empleado', $employee->id)}}" title="{!! trans('general.delete') !!}" class="btn btn-danger">{!! trans('general.delete') !!}</a> 
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
