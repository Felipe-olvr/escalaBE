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
	<td>
		<form method="POST" action='/delete_action/{{$data->id}}/delete' onsubmit="return alert('Usuário Deletado!');">
			<input type="submit" value="Excluir" />
		</form>
	</td>
</tr>
@endforeach

</table>
<center>
<h2>Ir para ...</h2>
<a href="http://homestead.local/admin/user_registration">Cadastrar Usuários</a>
</center>
</body>
</html>