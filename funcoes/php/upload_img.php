<?php

function uploadImg($imgPost='',$nome=''){
	require_once('../../configuracoes/locaisUpload.php');
	require_once('../../classes/Upload.class.php');
	//-----------------------
	$img = new Upload();
	$end = $img->uploadArquivo($imgPost,localImgUsua,$nome);
	return $end;
}