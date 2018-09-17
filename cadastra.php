<!DOCTYPE html>
<html>
<body>

<?php
include("conecta_cadastro.php");


	$user = $_POST["user"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
    $cargo = "user";
     
    mysqli_query($conexao,"insert into USUARIO(user,email,senha,cargo)values('$user','$email','$senha','$cargo')");
?>

</body>
</html>