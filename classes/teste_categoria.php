
<style>
	table,th,tr,td{
	border:solid 1px;
	}
</style>
<?php
	/*include_once('Categoria.class.php');
	include_once($_SERVER['DOCUMENT_ROOT'].'/blog/funcoes/php/geraPalavra.php');
	for($i=0;$i<=20;$i++){
	$categoria=new Categoria($nom_catg=geraPalavra('c',0,6),$obs_catg=geraPalavra('t',0,40),$sta_ctg=1);
	$categoria->insertCatg();
	print $i.'-> '.geraPalavra('t',0,100).'<br/>';
	}
	*/
	include($_SERVER['DOCUMENT_ROOT'].'/blog/funcoes/php/categoria_funcoes.php');
	getTabelaCatg();
	
?>