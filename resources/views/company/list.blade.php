@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <div class="card">
                <h1 class="card-header text-center">{!! trans('general.list_company') !!}</h1>
                <div class="card-body table-responsive">
                    <a href="{{route('crear-compania')}}" class="btn btn-success" style="margin-bottom: 15px">{!! trans('general.new_company') !!}</a>
                    <table id="example1" class="table table-bordered table-striped table-hover table-sm" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Logo</th>
                                <th>{!! trans('general.name') !!}</th>                        
                                <th>Email</th>
                                <th>{!! trans('general.action') !!}</th>
                            </tr>
                        </thead>
                        <tbody> 
                            @foreach($companies as $company)
                            <tr>
                                <td style="text-align: center"><img src="{{asset('storage')}}/{{$company->logo}}" width="50px"></td>
                                <td>{{$company->name}}</td>
                                <td>{{$company->email}}</td>
                                <td style="text-align: center"> 
                                    <a href="{{route('editar-compania', $company->id)}}" title="{!! trans('general.edit') !!}" class="btn btn-info" style="color: white">{!! trans('general.edit') !!}</a> 
                                    <a href="{{route('eliminar-compania', $company->id)}}" title="{!! trans('general.delete') !!}" class="btn btn-danger">{!! trans('general.delete') !!}</a> 
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
