<?php
class Categoria{
	var $cod_catg;
	var $nom_catg;
	var $obs_catg;
	var $sta_ctg;
	var $dathor_gtg;
	
	function __construct($nom_catg='',$obs_catg='',$sta_ctg=1){
		$this->setNom_catg($nom_catg);
		$this->setObs_catg($obs_catg);
		$this->setObs_catg($obs_catg);
		$this->setSta_ctg($sta_ctg);
		$this->setDathor_ctg();
		
	}


	function setCod_catg($cod_catg){
		if(!empty($cod_catg) && $cod_catg>0){
			$this->cod_catg  =$cod_catg;
			return true;
		}
	}
	function setNom_catg($nom_catg){
		if(!empty($nom_catg)){
			$this->nom_catg  =$nom_catg;
			return true;
		}
	}
	function setObs_catg($obs_catg){
		if(!empty($obs_catg)){
			$this->obs_catg  =$obs_catg;
			return true;
		}
	}
	function setSta_ctg($sta_ctg){
		if($sta_ctg==0 || $sta_ctg==1){
			$this->sta_ctg   =$sta_ctg;
			return true;
		}
	}
	function setDathor_ctg(){
		/*if(){
			$this->dathor_gtg=$dathor_gtg ;
			return true;
		}*/
	}

	function getCod_catg(){
		return $this->cod_catg;
	}
	function getNom_catg(){
		return $this->nom_catg;
	}
	function getObs_catg(){
		return $this->obs_catg;
	}
	function getSta_ctg(){
		return $this->sta_ctg;
	}
	function getDathor_gtg(){
		return $this->dathor_gtg;
	}
	
	function insertCatg(){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("INSERT INTO
			categoria(
				 nom_catg,
				 obs_catg,
				 sta_ctg,
				 dathor_gtg
				 )
			VALUES (
				'$this->nom_catg',
				'$this->obs_catg',
				'$this->sta_ctg',
				'$this->dathor_gtg'
				)
		");
		return $query;
		//$mysql->desconecta();
	}

	function selectCatg(){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("SELECT * FROM categoria");
		if(mysql_num_rows($query)>0){
			return $query;
		}else{
			return false;
		}
	}
	
	function deleteCatg(){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("DELETE  FROM categoria WHERE cod_Catg='$this->cod_Catg'");
		if($query){
			return true;
		}else{
			return false;
		}
	}
	
	function selectCodCatg($cod){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("SELECT * FROM categoria WHERE cod_Catg='$cod'");
		if(mysql_num_rows($query)>0){
			return $query;
		}else{
			return false;
		}
	}
	function selectNomCatg($nom){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("SELECT * FROM categoria WHERE nom_Catg='$nom'");
		if(mysql_num_rows($query)>0){
			return $query;
		}else{
			return false;
		}
	}	
	function desativarCatg(){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("UPDATE categoria SET sta_ctg=1 WHERE cod_Catg='$this->cod_Catg'");
		if($query){
			return true;
		}else{
			return false;
		}
	}
	function verificaObrigatorio(){// verifica os campos obrigatórios desta classe
		$verifica = array($this->nom_Catg);
			for($i=0;$i<count($verifica);$i++){
				if(empty($verifica[$i]) || $verifica[$i]==''){
					return false;
					break;
				}
			}
		
	}
	
}






