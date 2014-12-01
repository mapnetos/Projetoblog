<?php 
include("Usuario.class.php");

$eu = new Usuario();
$eu->setCod_usua(3);
echo $eu->getCod_usua();
	if($eu->deleteUsua()){
		echo "<br> Cadastro removido com sucesso <br>";
	}
//$eu = new Usuario("José do Carmo Neto","Mapnep","4515230","4515230","1","","10/01/2014 11:40:55","#000","blog/img/usuario/10_mapnetos.jpg","mapnetos@hotmail.com");
/*if($eu->insertUsua()){
	echo "deu certo\ns";
};
echo $eu->getNom_usua();
*/
?>
