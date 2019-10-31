<?php
// pegar os dados da tela
$email = $_POST["email"];
$senha = $_POST["senha"];
/*
echo"E-mail: ".$email;
echo"<br>Senha".$senha;
*/

//abrir a conexão com o banco de dados
    // myslqi_connect(SERVIDOR, USUARIO, SENHA, BAMCO)
$con = mysql_connect("localhost", "root", "12345", "aulaprojeto");

//montar a instrução de seleção para ir ao banco
$sql = "select*from usuario where email = '".$email."' and senha ='".$senha."'";

//executar a instrução
if (mysql_query($con,$sql)) {
 	echo "Encontrei!";
 }else{ 
 	echo "Não encontrei!";
 	
 }; 
?>