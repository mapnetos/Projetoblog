<?php
	include('class.Upload.php');
	
	$teste = new Upload();
	$ui = array("s",'d');
	
	echo $teste->encriptar($ui);
	echo '<br>';
	echo $teste->encriptar('sd');
?>