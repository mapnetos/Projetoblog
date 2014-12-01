<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<?php
	include_once('header_css.html');
?>

</head>

<body>
<div class="geral">
	<div class="header">
    	<div class="topo">
			<?php include('componentes/menu_top.php'); ?>
		</div>
		<div class="menu">
    	
		</div>
    </div>
    <div class="body">
    	<div class="body_post">
			<?php include('componentes/post.php'); ?>
			<?php include('componentes/post.php'); ?>
			<?php include('componentes/post.php'); ?>
			<?php include('componentes/post.php'); ?>
			<?php include('componentes/post.php'); ?>
			<?php include('componentes/post.php'); ?>
		</div>
		<div class="body_menu">
			<?php include('componentes/menu_post.php'); ?>
			<?php include('componentes/enquete.php'); ?>
		</div>
    </div>
    <div class="footer">
    	<!-- aqui ficará o rodapé -->
    </div>
    
</div>
<?php
	include_once('header_js.html');
?>
</body>
</html>
