<?php
	Function getTabelaPost(){
		require_once($_SERVER['DOCUMENT_ROOT']."/blog/classes/Post.class.php");
		$tabela= new Post;
		$consulta=$tabela->selectPost();
		$criar=criaArrayQueryPost($consulta);
		  list($cod_post,$titulo_post,$descr_post,$tip_post,$cod_doc,$cod_bibl,$cod_usua,$dathor_post,$cod_cate,$sta_post,$reqconfi_post,$hierarq_post,$unic_post,$datexpir_post)=$criar;
			// criando tabela
			echo "<table id='tab' class='table table-striped table-bordered'width='100%' cellspacing='0' style='font-size:10pt;'>
				<thead>
					<tr>
						<th style='width:2%;'>Código</th>
						<th style='width:20%;'>Título</th>
						<th style='width:18%;'>Autor</th>
						<th style='width:20%;'>Criado em</th>
						<th style='width:20%;'>Data Expir.</th>
						<th style='width:5%;'>Status</th>
						<th style='width:10%;'>Opções</th>
					</tr>
				</thead>
				<tbody>
					";
			for($i=0;$i<=sizeof($cod_post)-1;$i++){
				include($_SERVER['DOCUMENT_ROOT'].'/blog/componentes/tabela/tabela_post.php');
			}
			echo "<tbody> </table>";
	}
	
	function criaArrayQueryPost($tabela){
		if(!empty($tabela)){
			if(mysql_num_rows($tabela)>0){
				$i=0;
				while($row=mysql_fetch_array($tabela)){
					$cod_post[$i]		 =$row['cod_post'];
					$titulo_post[$i]	 =$row['titulo_post'];
					$descr_post[$i]		 =$row['descr_post'];
					$tip_post[$i]		 =$row['tip_post'];
					$cod_doc[$i]		 =$row['cod_doc'];
					$cod_bibl[$i]		 =$row['cod_bibl'];
					$cod_usua[$i]		 =$row['cod_usua'];
					$dathor_post[$i]	 =$row['dathor_post'];
					$cod_cate[$i]		 =$row['cod_cate'];
					$sta_post[$i]		 =$row['sta_post'];
					$reqconfi_post[$i]	 =$row['reqconfi_post'];
					$hierarq_post[$i]	 =$row['hierarq_post'];
					$unic_post[$i]		 =$row['unic_post'];
					$datexpir_post[$i]	 =$row['datexpir_post'];
					$i++;
				}                
				  return $lista=array($cod_post,$titulo_post,$descr_post,$tip_post,$cod_doc,$cod_bibl,$cod_usua,$dathor_post,$cod_cate,$sta_post,$reqconfi_post,$hierarq_post,$unic_post,$datexpir_post);           
			}else{return false;}
		}else{return false;}
	}
	
	function criarTabelaPost(){
	
	}
	
	function gravaUsuario($titulo_post,$descr_post,$tip_post,$cod_doc,$cod_bibl,$cod_usua,$dathor_post,$cod_cate,$sta_post,$reqconfi_post,$hierarq_post,$unic_post,$datexpir_post){
		require_once($_SERVER['DOCUMENT_ROOT']."/blog/classes/Post.class.php");
		$post=new Post($titulo_post,$descr_post,$tip_post,$cod_doc,$cod_bibl,$cod_usua,$dathor_post,$cod_cate,$sta_post,$reqconfi_post,$hierarq_post,$unic_post,$datexpir_post)
		
		
	}

?>