<?php	
require_once($_SERVER['DOCUMENT_ROOT']."/blog/classes/Usuario.class.php");
	function criarUsuario($desc_usua,$nom_usua,$senha_usua,$cod_grpusua,$sta_usua,$dathrcad_usua,$corpan_usua,$img_usua,$emai_usua){
		$usuario=new Usuario($desc_usua,$nom_usua,$senha_usua,$cod_grpusua,$sta_usua,$dathrcad_usua,$corpan_usua,$img_usua,$emai_usua);
		if(!$usuario){
			echo "não foi possível criar o usuário";
		}
	}


	Function getTabelaUsuario(){
		require_once($_SERVER['DOCUMENT_ROOT']."/blog/classes/Usuario.class.php");
		$tabela= new Usuario;
		$consulta=$tabela->selectUsua();
		$criar=criaArrayQueryUsuario($consulta);
		  list($cod_usua,$desc_usua,$nom_usua,$senha_usua,$cod_grpusua,$sta_usua,$dathrcad_usua,$corpan_usua,$img_usua,$emai_usua)=$criar;
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
			for($i=0;$i<=sizeof($cod_usua)-1;$i++){
				include($_SERVER['DOCUMENT_ROOT'].'/blog/componentes/tabela/tabela_Usuario.php');
			}
			echo "<tbody> </table>";
	}
	
	function criaArrayQueryUsuario($tabela){
		if(!empty($tabela)){
			if(mysql_num_rows($tabela)>0){
				$i=0;
				while($row=mysql_fetch_array($tabela)){
					$cod_usua[$i]		=$row['cod_usua'];
					$desc_usua[$i]		=$row['desc_usua'];
					$nom_usua[$i]		=$row['nom_usua'];
					$senha_usua[$i]		=$row['senha_usua'];
					$cod_grpusua[$i]	=$row['cod_grpusua'];
					$sta_usua[$i]		=$row['sta_usua'];
					$dathrcad_usua[$i]	=$row['dathrcad_usua'];
					$corpan_usua[$i]	=$row['corpan_usua'];
					$img_usua[$i]		=$row['img_usua'];
					$emai_usua[$i]		=$row['emai_usua'];
					$i++;

				}                
				  return $lista=array($cod_usua,$desc_usua,$nom_usua,$senha_usua,$cod_grpusua,$sta_usua,$dathrcad_usua,$corpan_usua,$img_usua,$emai_usua);           
			}else{return false;}
		}else{return false;}
	}
	function criarTabelaUsuario(){
	}
	
	function gravaUsuario($desc_usua,$nom_usua,$senha_usua,$cod_grpusua,$sta_usua,$dathrcad_usua,$corpan_usua,$img_usua,$emai_usua){
		require_once($_SERVER['DOCUMENT_ROOT']."/blog/classes/Usuario.class.php");
		$Usuario=new Usuario($cod_usua,$desc_usua,$nom_usua,$senha_usua,$cod_grpusua,$sta_usua,$dathrcad_usua,$corpan_usua,$img_usua,$emai_usua);
	}

?>