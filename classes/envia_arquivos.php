<?php
 include("class.Upload.php");

 //define os tipos permitidos
 $tipos[0]=".gif";
 $tipos[1]=".jpg";
 $tipos[2]=".jpeg";
 $tipos[3]=".png";
 /* 
 $upArquivo = new Upload;
 $upArquivo->salvarArquivo($_FILES["userfile"], "Imagens");
*/
 if(isset($_FILES["userfile"])){
	 $upArquivo = new Upload;
	 $subir = $upArquivo->UploadArquivo($_FILES["userfile"], "Imagens", $tipos);
	 if($subir===true) {
		 $nome = $upArquivo->nome;
		 $tipo = $upArquivo->tipo;
		 $tamanho = number_format($upArquivo->tamanho/1024,2);
		 echo"
			 <strong>Nome do Arquivo Enviado:</strong> $nome $subir; <br />
			 <strong>Tipo do Arquivo Enviado:</strong>   $tipo <br />
			 <strong>Tamanho do Arquivo Enviado:</strong>  $tamanho <br />
		 ";
	 }else{
		echo $subir;
	 }
 }else{
	echo "não existe";
 }
 ?>

