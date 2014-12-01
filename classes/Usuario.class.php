<?php 	
class Usuario{
	var $cod_usua;
	var $desc_usua;
	var $nom_usua;
	var $senha_usua;
	var $cod_grpusua;
	var $sta_usua;
	var $dathrcad_usua;
	var $corpan_usua;
	var $img_usua;
	var $emai_usua;
	
	function __construct($desc_usua='',$nom_usua='',$senha_usua='',$confirm='',$cod_grpusua='',$sta_usua=1,$dathrcad_usua='',$corpan_usua='',$img_usua='',$emai_usua=''){
		//setCod_usua(//$cod_usua);
		$this->setDesc_usua($desc_usua);
		$this->setNom_usua($nom_usua);
		$this->setSenha_usua($senha_usua, $confirm);
		$this->setCod_grpusua($cod_grpusua);
		$this->setSta_usua($sta_usua);
		$this->setDathrcad_usua($dathrcad_usua);
		$this->setCorpan_usua($corpan_usua);
		$this->setImg_usua($img_usua);
		$this->setEmai_usua($emai_usua);
	}

	function setCod_usua($cod_usua){
		if($cod_usua>0){
			$this->cod_usua=$cod_usua;
			return true;
		}else{
			return false;
		}
	}
	function setDesc_usua($desc_usua){
		if(!empty($desc_usua)){
			$this->desc_usua=$desc_usua;
			return true;
		}else{
		return false;
		}
	}
	function setNom_usua($nom_usua){
		if(!empty($nom_usua)){
			$this->nom_usua=$nom_usua;
			return true;
		}else{
			return false;
		}
	}
	function setSenha_usua($senha_usua, $confirm){
		if(!empty($senha_usua) && !empty($confirm)){
			if($senha_usua==$confirm){
				$this->senha_usua=$senha_usua;
				return true;
			}else{
				return "Senhas são diferentes ";
			}
		}else{
			return "Existe um campo em branco";
		}
	}
	function setCod_grpusua($cod_grpusua){
		if($cod_grpusua>0){
			$this->cod_grpusua=$cod_grpusua;
		}else{
			return false;
		}
	}
	function setSta_usua($sta_usua){
		if($sta_usua==1 or $sta_usua==0){
			$this->sta_usua=$sta_usua;
		}else{
		return false;
		}

	}
	function setDathrcad_usua($dathrcad_usua){
		$this->dathrcad_usua=$dathrcad_usua;
	}
	function setCorpan_usua($corpan_usua){
		$this->corpan_usua=$corpan_usua;
	}
	function setImg_usua($img_usua){
		$this->img_usua=$img_usua;
	}
	function setEmai_usua($emai_usua){
		$this->emai_usua=$emai_usua;
	}

	function getCod_usua(){
		return $this->cod_usua;
	}
	function getDesc_usua(){
		return $this->desc_usua;
	}
	function getNom_usua(){
	return $this->nom_usua;
	}
	function getSenha_usua(){
		return $this->senha_usua;
	}
	function getCod_grpusua(){
		return $this->cod_grpusua;
	}
	function getSta_usua(){
		return $this->sta_usua;
	}
	function getDathrcad_usua(){
		return $this->dathrcad_usua;
	}
	function getCorpan_usua(){
		return $this->corpan_usua;
	}
	function getImg_usua(){
		return $this->img_usua;
	}
	function getEmai_usua(){
		return $this->emai_usua;
	}

	function insertUsua(){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("INSERT INTO 
			usuario(
				desc_usua,
				nom_usua,
				senha_usua,
				cod_grpusua,
				sta_usua,
				dathrcad_usua,
				corpan_usua,
				img_usua,
				emai_usua
			) 
			VALUES (
				'$this->desc_usua',
				'$this->nom_usua',
				'$this->senha_usua',
				'$this->cod_grpusua',
				'$this->sta_usua',
				'$this->dathrcad_usua',
				'$this->corpan_usua',
				'$this->img_usua',
				'$this->emai_usua'
			)
		");
		return $query;
		//$mysql->desconecta();
	}

	function selectUsua(){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("SELECT * FROM usuario");
		if(mysql_num_rows($query)>0){
			return $query;
		}else{
			return false;
		}
	}
	
	function deleteUsua(){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("DELETE  FROM usuario WHERE cod_usua='$this->cod_usua'");
		if($query){
			return true;
		}else{
			return false;
		}
	}
	
	function selectCodUsua($cod){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("SELECT * FROM usuario WHERE cod_usua='$cod'");
		if(mysql_num_rows($query)>0){
			return $query;
		}else{
			return false;
		}
	}
	function selectNomUsua($nom){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("SELECT * FROM usuario WHERE nom_usua='$nom'");
		if(mysql_num_rows($query)>0){
			return $query;
		}else{
			return false;
		}
	}	
	
	function verificaObrigatorio(){// verifica os campos obrigatórios desta classe
		$verifica = array($this->desc_usua,$this->nom_usua,$this->senha_usua,$this->cod_grpusua,$this->dathrcad_usua,$this->emai_usua);
			for($i=0;$i<count($verifica);$i++){
				if(empty($verifica[$i]) || $verifica[$i]==''){
					return false;
					break;
				}
			}
		
	}
	
}


