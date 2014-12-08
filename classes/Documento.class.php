<?php
class Documento{
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
	
	function __construct($desc_doc='',$datcria_doc='',$datup_doc='',$tam_doc='',$local_doc='',$estenc_doc='',$cod_usua='',$qtddow_doc='',$icon_doc=''){
		$this->setDescDoc($desc_doc);
		$this->setDatcriaDoc($datcria_doc);
		$this->setDatupDoc($datup_doc);
		$this->setTamDoc($tam_doc);
		$this->setLocalDoc($local_doc);
		$this->setEstencDoc($estenc_doc);
		$this->setCodUsua($cod_usua);
		$this->setQtddowDoc($qtddow_doc);
		$this->setIconDoc($icon_doc);
		
	}
	function setCodDoc($cod_doc){
		if($cod_doc > 0){
			$this->codDoc =$cod_doc;
		}
	}
	function setDescDoc($desc_doc){
		if(!empty($desc_doc)){
			$this->desc_doc=$desc_doc; 
		}
	}
	function setDatcriaDoc($datcria_doc){
		if(!empty($datcria_doc)){
			$this->datcria_doc=$datcria_doc;
	}
	function setDatupDoc($datup_doc){
	// será criada por uma classe
		$this->datupDoc=$datup_doc;
	}
	
	function setTamDoc($tam_doc){
		if(!empty($tam_doc) && $tam_doc>0){
			$this->tam_doc=$tam_doc;
		}
	}
	function setLocalDoc($local_doc){
		if(!empty($local_doc)){
			$this->local_doc=$local_doc;
		}
	}
	function setEstencDoc($estenc_doc){
		if(!empty($estenc_doc)){
			$this->estenc_doc=$estenc_doc;
		}
	}
	function setCodUsua($cod_usua){
		if(!empty($cod_usua) && $cod_usua>0){
			$this->cod_usua=$cod_usua;
		}
	}
	function setQtddowDoc($qtddow_doc){
		if(!empty($qtddow_doc) && $qtddow_doc>0){
			$this->qtddow_doc=$qtddow_doc;
		}
	}
	function setIconDoc($setIcon_doc){
		if(!empty($setIcon_doc)){
			$this->setIcon_doc=$setIcon_doc;
		}
	}
	
	function getCod_doc(){
		return $this->cod_doc;
	}
	function getDesc_doc(){
		return	$this->desc_doc; 
	}
	function getDatcria_doc(){
		return	$this->datcria_doc;
	}
	function getDatup_doc(){
		return;
	}
}
	function getTam_doc(){
		return	$this->tam_doc;
	}
	function getLocal_doc(){
		return	$this->local_doc;
	}
	function getEstenc_doc(){
		return	$this->estenc_doc;
	}
	function getCod_usua(){
		return	$this->cod_usua;
	}
	function getQtddow_doc(){
		return	$this->qtddow_doc;
	}
	function getIcon_doc(){
		return	$this->getIcon_docc;
	}
	function insertDoc(){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("INSERT INTO 
			usuario(
				desc_doc,
				datcria_doc,
				datup_doc,
				tam_doc,
				local_doc,
				estenc_doc,
				cod_usua,
				qtddow_doc,
				icon_doc
			) 
			VALUES (
				'$this->desc_doc',
				'$this->datcria_doc',
				'$this->datup_doc',
				'$this->tam_doc',
				'$this->local_doc',
				'$this->estenc_doc',
				'$this->cod_usua',
				'$this->qtddow_doc',
				'$this->icon_doc'			
			)
		");
		return $query;
		//$mysql->desconecta();
	}

	function selectDoc(){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("SELECT * FROM documento");
		if(mysql_num_rows($query)>0){
			return $query;
		}else{
			return false;
		}
	}
	
	function deleteDoc(){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("DELETE  FROM documento WHERE cod_doc='$this->cod_doc'");
		if($query){
			return true;
		}else{
			return false;
		}
	}
	
	function selectCodDoc($cod){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("SELECT * FROM documento WHERE cod_doc='$cod'");
		if(mysql_num_rows($query)>0){
			return $query;
		}else{
			return false;
		}
	}
	function selectNomDoc($nom){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("SELECT * FROM usuario WHERE desc_doc='$nom'");
		if(mysql_num_rows($query)>0){
			return $query;
		}else{
			return false;
		}
	}	
	
	/*function verificaObrigatorio(){// verifica os campos obrigatórios desta classe
		$verifica = array($this->desc_usua,$this->nom_usua,$this->senha_usua,$this->cod_grpusua,$this->dathrcad_usua,$this->emai_usua);
			for($i=0;$i<count($verifica);$i++){
				if(empty($verifica[$i]) || $verifica[$i]==''){
					return false;
					break;
				}
			}
		
	}*/
}