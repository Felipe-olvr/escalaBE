<!-- resources/views/escala.blade.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Escala de usuários</title>
	<link href="/css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<h1> Escala de Usuários </h1>

<table id="userTable">
<tr>
	<th>Usuário</th>
	<th>E-mail</th>
	<th>Empresa</th>
	<th>Escalas</th>
	<th>Status</th>
</tr>

@foreach($escala as $key => $data)
<tr>
	<td>{{$data->user}}</td>
	<td>{{$data->email}}</td>
	<td>{{$data->company}}</td>
	<td>{{$data->escalas}}</td>
	<td>{{$data->status}}</td>
</tr>
@endforeach

</table>

</body>
</html>