<?php
	Function getTabelaUsuario(){
		require_once($_SERVER['DOCUMENT_ROOT']."/blog/classes/Usuario.class.php");
		$tabela= new Usuario;
		$consulta=$tabela->selectUsuario();
		$criar=criaArrayQueryUsuario($consulta);
		  list($cod_Usuario,$titulo_Usuario,$descr_Usuario,$tip_Usuario,$cod_doc,$cod_bibl,$cod_usua,$dathor_Usuario,$cod_cate,$sta_Usuario,$reqconfi_Usuario,$hierarq_Usuario,$unic_Usuario,$datexpir_Usuario)=$criar;
			// criando tabela
			echo "<table id='tab' class='table table-striped table-bordered'width='100%' cellspacing='0' style='font-size:10pt;'>
				<thead>
					<tr>
						<th style='width:2%;'>Código</th>
						<th style='width:20%;'>Nome completo</th>
						<th style='width:18%;'>Usuário</th>
						<th style='width:20%;'>Grupo</th>
						<th style='width:20%;'>Email</th>
						<th style='width:5%;'>Status</th>
					</tr>
				</thead>
				<tbody>
					";
			for($i=0;$i<=sizeof($cod_Usuario)-1;$i++){
				include($_SERVER['DOCUMENT_ROOT'].'/blog/componentes/tabela/tabela_Usuario.php');
			}
			echo "<tbody> </table>";
	}
	
	function criaArrayQueryUsuario($tabela){
		if(!empty($tabela)){
			if(mysql_num_rows($tabela)>0){
				$i=0;
				while($row=mysql_fetch_array($tabela)){
					$cod_usua		=$row['cod_usua'];
					$desc_usua		=$row['desc_usua'];
					$nom_usua		=$row['nom_usua'];
					$senha_usua		=$row['senha_usua'];
					$cod_grpusua	=$row['cod_grpusua'];
					$sta_usua		=$row['sta_usua'];
					$dathrcad_usua	=$row['dathrcad_usua'];
					$corpan_usua	=$row['corpan_usua'];
					$img_usua		=$row['img_usua'];
					$emai_usua		=$row['emai_usua'];

				}                
				  return $lista=array($cod_usua,$desc_usua,$nom_usua,$senha_usua,$cod_grpusua,$sta_usua,$dathrcad_usua,$corpan_usua,$img_usua,$emai_usua);           
			}else{return false;}
		}else{return false;}
	}
	
	function criarTabelaUsuario(){
	
	}
	
	function gravaUsuario($cod_usua,$desc_usua,$nom_usua,$senha_usua,$cod_grpusua,$sta_usua,$dathrcad_usua,$corpan_usua,$img_usua,$emai_usua){
		require_once($_SERVER['DOCUMENT_ROOT']."/blog/classes/Usuario.class.php");
		$Usuario=new Usuario($cod_usua,$desc_usua,$nom_usua,$senha_usua,$cod_grpusua,$sta_usua,$dathrcad_usua,$corpan_usua,$img_usua,$emai_usua);
		
		
	}

?>