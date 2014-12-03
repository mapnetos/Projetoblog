<?php
require_once("post_funcoes.php");
	
	$tituloPost		 =isset($_POST['tituloPost'])?$_POST['tituloPost']:'ttt'; echo $tituloPost;
    /*$descrPost		 =$_POST['descrPost'];  -------
    $tipPost		 =$_POST['tipPost'];
    $codDoc			 =$_POST['codDoc'];
    $codBibl		 =$_POST['codBibl']='';
    $codUsua 		 =$_POST['codUsua']=1;
    $urlVideo		 =$_POST['urlVideo']=1;
    $dathorPost		 =$_POST['dathorPost']='';//
    $codCate		 =$_POST['codCate'];
    $staPost	     =$_POST['staPost'];
    $reqconfiPost    =$_POST['reqconfiPost'];
    $hierarqPost	 =$_POST['hierarqPost'];
    $unicPost	 	 =$_POST['unicPost'];
    $datexpirPost	 =$_POST['datexpirPost']='';
    $imgPost	 	 =$_POST['imgPost'];
	 //----------------------------------
      echo '<br>titulo'.$_POST['tituloPost'];
	  echo '<br>titulo'.$_POST['descrPost'];
      echo '<br>titulo'.$_POST['tipPost'];
      echo '<br>titulo'.$_POST['codDoc'];
      echo '<br>titulo'.$_POST['codBibl']='';
      echo '<br>titulo'.$_POST['codUsua']=1;
	  echo '<br>titulo'.$_POST['urlVideo']=1;
      echo '<br>titulo'.$_POST['dathorPost']='';// será implementado na classe
      echo '<br>titulo'.$_POST['codCate'];
      echo '<br>titulo'.$_POST['staPost'];
      echo '<br>titulo'.$_POST['reqconfiPost'];
	  echo '<br>titulo'.$_POST['hierarqPost'];
      echo '<br>titulo'.$_POST['unicPost'];
      echo '<br>titulo'.$_POST['datexpirPost']='';
	  echo '<br>titulo'.$_POST['imgPost'];
	  
	gravaPost($_POST['tituloPost'],$_POST['descrPost'],$_POST['tipPost'],$cod_doc,$cod_bibl,$cod_usua,$dathor_post,$cod_cate,$sta_post,$reqconfi_post,$hierarq_post,$unic_post,$datexpir_post);
	
	if(isset($_POST['tipPost']) && $_POST['tipPost']==1){ // 1- Sem imagem . 2-imagem  3-video 4-galeria
		$_POST['imgPost']='';
		$_POST['codDoc']='';
		$_POST['codBibl']='';
		$_POST['urlVideo']='';
	}else if((isset($_POST['tipPost']) && $_POST['tipPost']==2) && !empty($_POST['codDoc'])){
		$_POST['imgPost']='';
		//$_POST['codDoc']=''; este foi selecionado
		$_POST['codBibl']='';
		$_POST['urlVideo']='';
		
	}else if((isset($_POST['tipPost']) && $_POST['tipPost']==2) && (isset($_POST['imgPost']) && !empty($_POST['imgPost']))){
		//$_POST['imgPost']='';este foi selecionado
		$_POST['codDoc']='';
		$_POST['codBibl']='';
		$_POST['urlVideo']='';
	}else if((isset($_POST['tipPost']) && $_POST['tipPost']==3) && (isset($_POST['codDoc']) && !empty($_POST['codDoc']))){
		$_POST['imgPost']='';
		//$_POST['codDoc']=''; este foi selecionado
		$_POST['codBibl']='';
		$_POST['urlVideo']='';
		
	}else if((isset($_POST['tipPost']) &&$_POST['tipPost']==3) && (isset($_POST['urlVideo']) && !empty($_POST['urlVideo']))){
		$_POST['imgPost']='';
		$_POST['codDoc']='';
		$_POST['codBibl']='';
		//$_POST['urlVideo']='';este foi selecionado
	}else if((isset($_POST['tipPost']) &&$_POST['tipPost']==4) && (isset($_POST['codDoc']) && !empty($_POST['codDoc']))){
		$_POST['imgPost']='';
		//$_POST['codDoc']=''; este foi selecionado
		$_POST['codBibl']='';
		$_POST['urlVideo']='';
		
	}else{
		echo "Erro na ilustração do post";
	}*/
	
?>