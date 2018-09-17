<?php 
	session_start();
	
	$user = $_POST['user'];
	$senha = $_POST['senha'];

	include_once("conecta.php");


	$consulta = "SELECT * 
				 FROM tecflix
				 WHERE user = '$user' AND senha = '$senha' LIMIT 1
				";

	$con = $mysqli->query($consulta) or die($mysqli->error);


	$dado = $con->fetch_array();
	//echo $dado["nome_func"];

	//Testa se $dado est� vazia, se sim n�o achou no banco
	if(empty($dado)){
		//Mensagem de erro
		$_SESSION['erroLogin'] = "Usuário ou senha inválido";

		//manda para a página de login
		header("Location: login.html");

	}else{
		//Se tiver sido feito login as variaveis globais de sessão recebem os dados do banco
		$_SESSION['user'] = $dado["user"];
		$_SESSION['email']    = $dado["email"];
		$_SESSION['senha']    = $dado["senha"];
		$_SESSION['cargo']    = $dado["cargo"];


		//Redireciona o usuario para o perfil
		switch($_SESSION['cargo'])
	    {	   
		   case 'Adm':
		   	   header("Location:pricing.html");
			   break;	
				case 'user':
				header("Location:courses.html");
				break;

			default:
				header("Location:index.php");
				break;
		}	

	}
?>

