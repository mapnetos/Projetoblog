<?php

	var $cod_doc;
	var $desc_doc;
	var $datcria_doc;
	var $datup_doc;
	var $tam_doc;
	var $local_doc;
	var $estenc_doc;
	var $cod_usua;
	var $qtddow_doc;
	var $icon_doc;

	function setCod_doc($cod_doc){
		if($cod_doc > 0){
			$this->cod_doc =$cod_doc;
		}
	function setDesc_doc($desc_doc){
		if(!empty($desc_doc)){
			$this->desc_doc=$desc_doc; 
		}
	function setDatcria_doc($datcria_doc){
		if(!empty($datcria_doc)){
			$this->datcria_doc=$datcria_doc;
	}
	function setDatup_doc($datup_doc){
	// será criada por uma classe
	}
	
	function setTam_doc($tam_doc){
		if(empty($tam_doc) && $tam_doc>0){
			$this->tam_doc=$tam_doc;
		}
	}
	function setLocal_doc($local_doc){
		if($local_doc
	function setEstenc_doc($estenc_doc){
	$estenc_doc
	function setCod_usua($cod_usua){
	$cod_usua
	function setQtddow_doc($qtddow_doc){
	$qtddow_doc
	function setIcon_doc($qtddow_doc){
	$qtddow_doc
