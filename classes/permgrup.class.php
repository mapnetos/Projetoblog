<?php
class Permgrup{

	var $cod_permgrup;
	var $cod_gpr;
	var $cod_perm;

	function __construct($cod_gpr,$cod_perm){
	
	}
	
	function setCod_permgrup($cod_permgrup){
		if($cod_permgrup>0){
			$this->cod_permgrup=$cod_permgrup;
			return true;
		}else{
			return false;
		}
	}
	
	function setCod_gpr($cod_gpr){
		if($cod_gpr>0){
			$this->cod_gpr=$cod_gpr;
			return true;
		}else{
			return false;
		}
	}
	
	function setCod_perm($cod_perm){
		if($cod_perm>0){
			$this->cod_perm=$cod_perm;
			return true;
		}else{
			return false;
		}
	}
	
	function getCod_permgrup(){
		return $this->cod_permgrup;
	}
	function getCod_gpr(){
		return $this->cod_gpr;
	}
	function getCod_perm(){
		return $this->cod_perm;
	}
	
	function insertPermgrup(){
		require_once("mysql_class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("INSERT INTO
			permgrup(
				cod_gpr,
				cod_perm
			)
			VALUES(
				'$this->cod_gpr',
				'$this->cod_perm'
			)
		
		");
		if($query){
			return true;
		}else{
			return false;
		}
	}
	function deletePermgrup($cod){
		require_once("mysql_class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("DELETE * FROM permgrup WHERE cod_permgrup = '$cod_permgrup'	");
		
		if($query){
			return true;
		}else{
			return false;
		}
	}
	function selectPermgrup(){
		equire_once("mysql_class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("DELETE * FROM permgrup");
		
		if($query){
			return $query;
		}else{
			return false;
		}
	}
	function selectGrupPermicao($cod_gpr){// seleciona as permições para um determinado grupo
		equire_once("mysql_class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("DELETE * FROM permgrup WHERE cod_gpr='$cod_gpr'");
		
		if($query){
			return $query;
		}else{
			return false;
		}
	}
	function selectPermicaoGrup($cod_perm){// seleciona os grupos que tem a permição
		equire_once("mysql_class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("DELETE * FROM permgrup WHERE cod_perm='$cod_perm'");
		
		if($query){
			return $query;
		}else{
			return false;
		}
	}
}

?>