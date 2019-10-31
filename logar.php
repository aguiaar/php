<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

 <link rel="stylesheet" type="text/css" href="../projeto/bootstrap/css/bootstrap.css">

</head>
<body>

	<div class="container">
	<h3 class="pageheader"> Logar no Sitema </h3>
	<fieldset>
		<legend>:::SISTEMA:::</legend>
	<form action="verificarlogin.php" method="POST" class="formgroup">
		E-mail.: <input type="text" name="email"
		placeholder="Digite o E-mail"/>
		Senha.: <input type="password" name="senha"
		placeholder="Digite a Senha"/>
		<br><br>
	<input type="submit" value="Entar no Sistema"/>
	</form>
	</fieldset> 

</body>
</html>