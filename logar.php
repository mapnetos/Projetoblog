<h1>logar</h1>
<form action="seguranca/validaLogin.php" method="POST">
    <input name="usuario" type="text"><br>
    <input name="senha" type="password"><br>
    <input type="submit"><br>
    <a href="">deslogar</a>
</form>
<?php if(!isset($_COOKIE["usuario"])){ 
	echo " N logado";
}
?>
