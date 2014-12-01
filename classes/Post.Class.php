<?php

class Post{
	var $cod_post;
	var $titulo_post;
	var $descr_post;
	var $tip_post;
	var $cod_doc;
	var $cod_bibl;
	var $cod_usua;
	var $dathor_post;
	var $cod_cate;
	var $sta_post;
	var $reqconfi_post;
	var $hierarq_post;
	var $unic_post;
	var $datexpir_post;
	function __construct($titulo_post="",$descr_post="",$tip_post="",$cod_doc="",$cod_bibl="",$cod_usua="",$dathor_post="",$cod_cate="",$sta_post=1,$reqconfi_post=0,$hierarq_post=0,$unic_post=0,$datexpir_post=""){
		$this->setTitulo_post($titulo_post);
		$this->setDescr_post($descr_post);
		$this->setTip_post($tip_post);
		$this->setCod_doc($cod_doc);
		$this->setCod_bibl($cod_bibl);
		$this->setCod_usua($cod_usua);
		$this->setDathor_post($dathor_post);
		$this->setCod_cate($cod_cate);
		$this->setSta_post($sta_post);
		$this->setReqconfi_post($reqconfi_post);
		$this->setHierarq_post($hierarq_post);
		$this->setUnic_post($unic_post);
		$this->setDatexpir_post($datexpir_post);
	
	}
	function setCod_post($cod_post){
		if(!empty($cod_post) && $cod_post>0){
			$this->cod_post=$cod_post;
			return true;
		}else{
			return false;
		}
	}
	function setTitulo_post($titulo_post){
		if(!empty($titulo_post)){
			$this->titulo_post=$titulo_post;
			return true;
		}else{
			return false;
		}
	}
	function setDescr_post($descr_post){
		if(!empty($descr_post)){
			$this->descr_post=$descr_post;
			return true;
		}else{
			return false;
		}
	}
	function setTip_post($tip_post){
		if(strlen($tip_post)==1){
			$this->tip_post=$tip_post;
			return true;
		}else{
			return false;
		}
	}
	function setCod_doc($cod_doc){
		if(!empty($cod_doc)){
			$this->cod_doc=$cod_doc;
			return true;
		}else{
			return false;
		}
	}
	function setCod_bibl($cod_bibl){
		if(!empty($cod_bibl) && empty($this->cod_video)){ // verifica se o valor do campo video esta vazio, pois os dois não podem esta vazios, apenas um deles
			$this->cod_bibl=$cod_bibl;
			return true;
		}else{
			return false;
		}
	}
	function setCod_video($cod_video){
		if(!empty($cod_video) && empty($this->cod_video)){// verifica se o valor do campo video esta vazio, pois os dois não podem esta vazios, apenas um deles
				$this->cod_video=$cod_video;
			return true;
		}else{
			return false;
		}
	}
	function setCod_usua($cod_usua){
		if(!empty($cod_usua)){
			$this->cod_usua=$cod_usua;
			return true;
		}else{
			return false;
		}
	}
	function setDathor_post($dathor_post){
		if(!empty($dathor_post)){
			$this->dathor_post=$dathor_post; // futuramente criar os objetos data, paa que sejam feitas as validações necessarias
			return true;
		}else{
			return false;
		}
	}
	function setCod_cate($cod_cate){
		if(!empty($cod_cate)){
			$this->cod_cate=$cod_cate;
			return true;
		}else{
			return false;
		}
	}
	function setSta_post($sta_post){
		if($sta_post==0 || $sta_post==1){
			$this->sta_post=$sta_post;
			return true;
		}else{
			return false;
		}
	}
	function setReqconfi_post($reqconfi_post){
		if($reqconfi_post==1 || $reqconfi_post==0){
			$this->reqconfi_post=$reqconfi_post;
			return true;
		}else{
			return false;
		}
	}
	function setHierarq_post($hierarq_post){
		if($hierarq_post==1 || $hierarq_post==0){
			$this->hierarq_post=$hierarq_post;
			return true;
		}else{
			return false;
		}
	}
	function setUnic_post($unic_post){
		if($unic_post==0 || $unic_post==1){
			$this->unic_post=$unic_post;
			return true;
		}else{
			return false;
		}
	}
	function setDatexpir_post($datexpir_post){
		if(!empty($datexpir_post)){
			$this->datexpir_post=$datexpir_post;// futuramente criar os objetos data, paa que sejam feitas as validações necessarias
			return true;
		}else{
			return false;
		}
	}
	// get_browser
	function getCod_post(){
		return $this->cod_post ;
	}
	function getTitulo_post(){
		return $this->titulo_post ;
	}
	function getDescr_post(){
		return $this->descr_post ;
	}
	function getTip_post(){
		return $this->tip_post ;
	}
	function getCod_doc(){
		return $this->cod_doc ;
	}
	function getCod_bibl(){
		return $this->cod_bibl;
	}
	function getCod_video(){
		return $this->cod_video ;
	}
	function getCod_usua(){
		return $this->cod_usua ;
	}
	function getDathor_post(){
		return $this->dathor_post ;
	}
	function getCod_cate(){
		return $this->cod_cate ;
	}
	function getSta_post(){
		return $this->sta_post ;
	}
	function getReqconfi_post(){
		return $this->reqconfi_post ;
	}
	function getHierarq_post(){
		return $this->hierarq_post ;
	}
	function getUnic_post(){
		return $this->unic_post ;
	}
	function getDatexpir_post(){
		return $this->datexpir_post ;
	}
	
	function insertPost(){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("INSERT INTO 
			post(
				cod_post,
				titulo_post,
				descr_post,
				tip_post,
				cod_doc,
				cod_bibl,
				cod_usua,
				dathor_post,
				cod_cate,
				sta_post,
				reqconfi_post,
				hierarq_post,
				unic_post,
				datexpir_post
			) 
			VALUES(
				'$this->cod_post',
				'$this->titulo_post',
				'$this->descr_post',
				'$this->tip_post',
				'$this->cod_doc',
				'$this->cod_bibl',
				'$this->cod_usua',
				'$this->dathor_post',
				'$this->cod_cate',
				'$this->sta_post',
				'$this->reqconfi_post',
				'$this->hierarq_post',
				'$this->unic_post',
				'$this->datexpir_post'
			)
		");
		if($query){
			return true;
		}else{
			return false;
		}
	}

	function deletePost(){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("DELETE FROM post WHERE cod_post = '$this->cod_post'");
		
		if($query){
			return true;
		}else{
			return false;
		}
	}
	function selectPost(){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("SELECT * FROM post");
		
		if($query){
			return $query;
		}else{
			return false;
		}
	}
	function selectCodPost($cod){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("DELETE * FROM post WHERE cod_post='$cod'");
		
		if($query){
			return $query;
		}else{
			return false;
		}
	}
	function selectDescPost($desc){
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("DELETE * FROM grpusuario WHERE titulo_post LIKE '%$desc%'");
		
		if($query){
			return $query;
		}else{
			return false;
		}
	}
	function desativarPost($cod){//desativa o post
		require_once("mysql.class.php");
		$mysql = new conexao;
		$query = $mysql->sql_query("");
		
		if($query){
			return true;
		}else{
			return false;
		}
	}
	function ativarPost($cod){//ativa o post
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


