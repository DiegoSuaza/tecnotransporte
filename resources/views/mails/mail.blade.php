 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Nueva compañia</title>
</head>
<body>
    <h2>Nuevo comunicado</p>
    <p>Hemos encontrado un nuevo registro de una compañia en el sistema de Tecno Transporte.</p>
    <p>La compañia fue registrada con esta información:</p>
    <ul>
        <li><h3><strong>Logo: </strong><img src="{{asset('storage')}}/{{$company->logo}}" width="50px"></h3></li>
        <li><h3><strong>Nombre: </strong> {{ $company->name }}</h3></li>
        <li><h3><strong>Email: </strong> {{ $company->email }}</h3></li>
    </ul> 
</body>
</html>