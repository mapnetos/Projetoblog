<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<?php
	if(!isset($_COOKIE["usuario"])){
		if(isset($_POST['usuario']) and isset($_POST['senha'])){
			setcookie("usuario",$_POST['usuario']);
			setcookie("senha",$_POST['senha']);
			echo $_POST['usuario']." ".$_POST['senha'];
		}else{
			echo "não existe post usuario ou senha<br>";
			echo $_POST['usuario']." ".$_POST['senha'];
			}
	}else{
		echo "você já esta logado";
		}
	
?>
<?php if(isset($_COOKIE["agenda_usuario"])){
	echo 'LOGADOs';
	
	}?>
</body>
</html>