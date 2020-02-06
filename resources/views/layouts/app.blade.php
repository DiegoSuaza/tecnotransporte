<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css')}}">

</head>
<body>
    <div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('compania')}}">Compañias <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('empleado')}}">Empleados</a>
                            </li>
                        @endguest                      
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @if (asset($errors)&&count($errors) >0)
                <div class="alert alert-danger" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  @foreach ($errors->all() as $error)
                    <li> <strong> {!! $error !!}</strong> </li>
                  @endforeach
              
                </div>
              @endif
            <!--Contenido de la aplicaci��n-->
            @if(session()->has('flash'))
              <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>{{ session('flash') }}</div>
            @endif
            @if (session()->has('errores'))
              <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
        
                <strong>{!!session()->get('errores')!!}</strong>
              </div>
            @endif
            @if (session()->has('success'))
              <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
        
                <strong>{!!session()->get('success')!!}</strong>
              </div>
            @endif
        </main>        
            @yield('content')
    </div>

        

</body>

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- AdminlTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- REQUIRED JS SCRIPTS -->
<script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables/dataTables.buttons.min.js')}}">  </script>
<script src="{{asset('adminlte/plugins/datatables/buttons.flash.min.js')}}">  </script>
<script src="{{asset('adminlte/plugins/datatables/jszip.min.js')}}">  </script>
<script src="{{asset('adminlte/plugins/datatables/pdfmake.min.js')}}">  </script>
<script src="{{asset('adminlte/plugins/datatables/vfs_fonts.js')}}">  </script>
<script src="{{asset('adminlte/plugins/datatables/buttons.html5.min.js')}}">  </script>
<script src="{{asset('adminlte/plugins/datatables/buttons.print.min.js')}}">  </script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example1').DataTable({
            dom: "<'row'<'col-lg-4 col-md-12'B><'col-lg-4 col-md-12'l><'col-lg-4 col-md-12'f>><t><ip>",
          buttons: [
            { extend: 'csv', className: 'btn btn-primary' }, 
            { extend: 'excel' , text:'EXCEL', className: 'btn btn-success' },
            { extend: 'pdf', className: 'btn btn-danger' },
            { extend:'csv', text:'TXT' ,extension: '.txt', className: 'btn btn-info'}
          ],
          language:
            {
             "sProcessing":     "Procesando...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ning&uacute;n dato disponible en esta tabla",
              "sInfo":           "Mostrando _START_ de _END_ registros",
              "sInfoEmpty":      "Mostrando 0 de 0 registros",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
                  "sFirst":    "Primero",
                  "sLast":     "�0�3ltimo",
                  "sNext":     "Siguiente",
                  "sPrevious": "Anterior"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
              }
          }
        } );

    });
</script>
</html>
