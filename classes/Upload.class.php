<?php 
$url = $_SERVER["PHP_SELF"];
/*if(preg_match("class.Upload.php", "$url")){
	 header("Location: ../index.php");
}*/


class Upload {
	var $tipo;
	var $nome;
	var $tamanho;
	var $tipoPermitido = array(".gif",".jpg","jpeg","png");
	var $tamanhoPermitido = 1048576;// valor em byt
	
	function setTipo($tipo){ // seta o tipo / extenção caso seja valido adiciona
		for($i=0;$i<=count($this->tipoPermitido);$i++){
			if($tipo==$this-> tipoPermitido[1]){
				$arquivoPermitido=true;
			}else{
				$arquivoPermitido=false;
			}
			
			if($arquivoPermitido){
				$this->tipo=$tipo;
				return true;
			}else{
				return false;
			}
		}
		$this->tipo=$tipo;
	}
	function setNome($nome){
		$this->nome=$nome.$this->tipo;
	}
	function setTamanho($tamanho){
	
		if($tamanho <= $this-> tamanhoPermitido){
			$this->tamanho=$tamanho;
			return true;
		}else{
			return false;
		}
	}
	function encriptar($nome){
		if(!empty($nome)){
			if(count($nome)>1){
				for($i=0;$i < count($nome)-1;$i++){
					$nome[0] .= $nome[$i+1];
				}
				return $nomeFinal = md5($nome[0]);	
			}else{
				return $nomeFinal = md5($nome);
			}
			
		}else{
		return false;
		}
	}
	function salvarArquivo($arquivo,$pasta){
		move_uploaded_file($arquivo['tmp_name'], $pasta ."/" . $this->nome);
		return true;
	}
	function UploadArquivo($arquivo, $pasta, $tipos){ 
		if(isset($arquivo) and !empty($arquivo)){
			if($this->setTipo(strrchr($arquivo['name'],'.'))){
				if($this->setTamanho($arquivo["size"])){
					$nome=$this->setNome( $this->encriptar(array($arquivo["name"],date("dmYHis"))));
					$salva=$this->salvarArquivo($arquivo,$pasta);
					return true;
				}else{
					return "tamanho não é permitido";
				}
			}else{
				return "formato do arquivo não aceito";
			}
		}else{
			return "esta vazio";
		} 
 	}
 }
 ?>

