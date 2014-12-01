<?php
class GrpUsuario{
	var $cod_gpr     ;
	var $desc_gpr    ;
	var $img_pgr     ;
	var $dathor_gpr  ;
	var $sta_gpr     ;
	function __construct(){
	
	}
	
	function setCod_gpr($cod_gpr){
		if($cod_gpr>0){
			$this->cod_gpr=$cod_gpr;
			return true;
		}else{
			return false;
		}
	}
	function setDesc_gpr($desc_gpr){
		if(!empty($desc_gpr) && $desc_gpr!=""){
			$this->desc_gpr=$desc_gpr;
		}
	}
	function setImg_pgr($img_pgr){
		if(!empty($img_pgr) && $img_pgr!=""){
			$this->img_pgr=$img_pgr;
		}
	}
	function setDathor_gpr($dathor_gpr){
		require_once("Data.class.php");
	if(!empty($dathor_gpr) && $dathor_gpr!="" && ValidaData($dathor_gpr)){// verificando se esta vazio ou com calor e se o valor é válido
			$this->dathor_gpr=$dathor_gpr;
		}
	}
	function setSta_gpr($sta_gpr){
		if($sta_gprv==1 || $sta_gpr==0){
			$this->sta_gpr=$sta_gpr;
		}
	}
	
	function getCod_gpr(){
		return $this->cod_gpr;
	}
	function getDesc_gpr(){
		return $this->desc_gpr;
	}
	function getImg_pgr(){
		return $this->img_pgr;
	}
	function getDathor_gpr(){
		return $this->dathor_gpr;
	}
	function getSta_gpr(){
		return $this->sta_gpr;
	}
	function insertGprUsua(){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("INSERT INTO 
			grpusuario(
				cod_gpr,
				desc_gpr,
				cod_perm,
				img_pgr,
				dathor_gpr,
				sta_gpr
			) 
			VALUES(
				'$this->cod_gpr',
				'$this->cdesc_gpr',
				'$this->ccod_perm',
				'$this->cimg_pgr',
				'$this->cdathor_gpr',
				'$this->csta_gpr'
			)
		");
		if($query){
			return true;
		}else{
			return false;
		}
	}

	function deleteGprUsua($cod){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("DELETE * FROM grpusuario where cod_gpr = '$cod'");
		
		if($query){
			return true;
		}else{
			return false;
		}
	}
	function selectGprUsua(){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("DELETE * FROM grpusuario");
		
		if($query){
			return $query;
		}else{
			return false;
		}
	}
	function selectCodGprUsua($cod){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("DELETE * FROM grpusuario WHERE cod_gpr='$cod'");
		
		if($query){
			return $query;
		}else{
			return false;
		}
	}
	function selectDescGprUsua($desc){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("DELETE * FROM grpusuario WHERE cod_gpr='$desc'");
		
		if($query){
			return $query;
		}else{
			return false;
		}
	}
	function desativarGprUsua($cod){//desativa o grupo de usuario
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("");
		
		if($query){
			return true;
		}else{
			return false;
		}
	}
	function ativarGprUsua($cod){//ativa o grupo de usuario
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("");
		
		if($query){
			return true;
		}else{
			return false;
		}
	}

}


