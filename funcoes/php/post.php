<?php
require_once("post_funcoes.php");
	
	$tituloPost		 =isset($_POST['tituloPost'])?$_POST['tituloPost']:'ttt'; echo $tituloPost;
    $descrPost    	 =isset($_POST['descrPost'])?$_POST['descrPost']:""; 
    $tipPost		 =isset($_POST['tipPost'])?$_POST['tipPost']:"";
    $codDoc			 =isset($_POST['codDoc'])?$_POST['codDoc']:"";
    $codBibl		 =isset($_POST['codBibl'])?$_POST['codBibl']:"";
    $codUsua 		 =isset($_POST['codUsua'])?$_POST['codUsua']:"";
    $urlVideo		 =isset($_POST['urlVideo'])?$_POST['urlVideo']:"";
    $dathorPost		 =isset($_POST['dathorPost'])?$_POST['dathorPost']:"";//
    $codCate		 =isset($_POST['codCate'])?$_POST['codCate']:"";
    $staPost	     =isset($_POST['staPost'])?$_POST['staPost']:"";
    $reqconfiPost    =isset($_POST['reqconfiPost'])?$_POST['reqconfiPost']:"";
    $hierarqPost	 =isset($_POST['hierarqPost'])?$_POST['hierarqPost']:"";
    $unicPost	 	 =isset($_POST['unicPost'])?$_POST['unicPost']:"";
    $datexpirPost	 =isset($_POST['datexpirPost'])?$_POST['datexpirPost']:"";
    $imgPost	 	 =isset($_FILES['imgPost'])?$_FILES['imgPost']:"";
	 /* //----------------------------------
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
	  */
	//gravaPost($_POST['tituloPost'],$_POST['descrPost'],$_POST['tipPost'],$cod_doc,$cod_bibl,$cod_usua,$dathor_post,$cod_cate,$sta_post,$reqconfi_post,$hierarq_post,$unic_post,$datexpir_post);
	//echo $tipPost;
	if($tipPost==1){ // 1- Sem imagem . 2-imagem  3-video 4-galeria
		//$imgPost='';
		$codDoc='';
		$codBibl='';
		$urlVideo='';
	}else if($tipPost==2 && !empty($codDoc)){
		//$imgPost='';
		//$codDoc=''; este foi selecionado
		$codBibl='';
		$urlVideo='';
		
	}else if(($tipPost==2) /*&& (isset($imgPost) && !empty($imgPost))*/){
		require_once("upload_img.php");
		//$imgPost='';este foi selecionado
		$codDoc='';
		$codBibl='';
		$urlVideo='';
		uploadImg($imgPost);
		
		/*include('../../classes/Upload.class.php');                           /
		$img =new Upload();                                                    /
	   $img->uploadArquivo($imgPost,'C:\wamp\www\blog\documentos\imagens','');*/
		//($desc_doc='',$datcria_doc='',$datup_doc='',$tam_doc='',$local_doc='',$estenc_doc='',$cod_usua='',$qtddow_doc,$icon_doc='')
		//echo $img;
	}else if(($tipPost && $tipPost==3) && (isset($codDoc) && !empty($codDoc))){
		$imgPost='';
		//$codDoc=''; este foi selecionado
		$codBibl='';
		$urlVideo='';
		
	}else if(($tipPost &&$tipPost==3) && (isset($urlVideo) && !empty($urlVideo))){
		$imgPost='';
		$codDoc='';
		$codBibl='';
		//$urlVideo='';este foi selecionado
	}else if(($tipPost &&$tipPost==4) && (isset($codDoc) && !empty($codDoc))){
		$imgPost='';
		//$codDoc=''; este foi selecionado
		$codBibl='';
		$urlVideo='';
		
	}else{
		echo "Erro na ilustração do post";
	}//teste
	
?>