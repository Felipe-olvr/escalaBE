<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuário</title>
</head>
<body>

<h1> Cadastro de Usuário </h1>

<hr>

<div>
	<form method="POST" action='/register_action' onsubmit="return alert('Cadastro Enviado!');">
		<p>Usuário: <input type="text" size="30" name="user" /></p>
		<p>E-mail: <input type="text" size="30" name="email"/></p>
		<p>Empresa: <input type="text" size="30" name="company"/></p>
		<p># de Escalas: <input type="text" size="5" maxlength="5" name="escalas"/></p>
		<p>Status:
		<select name="status">
			<option value="ativo">ativo</option>
			<option value="inativo">inativo</option>
		</select></p>
		<p><input type="submit" value="Enviar"/></p>
	</form>
</div>

<hr>

<a href="http://homestead.local/">Listar usuários</a>

</body>
</html>