<?php
require_once("post_funcoes.php");
	
      echo '<br>titulo'. $_POST['tituloPost'];
	  echo '<br>titulo'.$_POST['descrPost'];
      echo '<br>titulo'.$_POST['tipPost'];
      echo '<br>titulo'.$_POST['codDoc'];
      echo '<br>titulo'.$_POST['codBibl']='';
      echo '<br>titulo'.$_POST['codUsua']=1;
      echo '<br>titulo'.$_POST['dathorPost']='';
      echo '<br>titulo'.$_POST['codCate'];
      echo '<br>titulo'.$_POST['staPost'];
      echo '<br>titulo'.$_POST['reqconfiPost'];
	  echo '<br>titulo'.$_POST['hierarqPost'];
      echo '<br>titulo'.$_POST['unicPost'];
      echo '<br>titulo'.$_POST['datexpirPost']='';
	  
	gravaPost($titulo_post,$descr_post,$tip_post,$cod_doc,$cod_bibl,$cod_usua,$dathor_post,$cod_cate,$sta_post,$reqconfi_post,$hierarq_post,$unic_post,$datexpir_post);
	
	marciaa-
	
?>