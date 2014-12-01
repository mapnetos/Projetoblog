<?php
	Function getTabelaCatg(){
		require_once($_SERVER['DOCUMENT_ROOT']."/blog/classes/categoria.class.php");
		$tabela= new Categoria;
		$consulta=$tabela->selectCatg();
		$criar=criaArrayQuerycatg($consulta);
		  list($cod_catg,$nom_catg,$obs_catg,$sta_ctg,$dathor_gtg)=$criar;
			// criando tabela
			echo "<table id='tabCatg' class='table table-striped table-bordered'width='100%' cellspacing='0' style='font-size:10pt;'>
				<thead>
					<tr>
						<th style='width:5%;'>Código</th>
						<th style='width:25%;'>Título</th>
						<th style='width:30%;'>Descriçao</th>
						<th style='width:10;'>Status</th>
						<th style='width:10;'>Criado em</th>
						<th style='width:20%;'>Opções</th>
					</tr>
				</thead>
				<tbody>
					";
			for($i=0;$i<=sizeof($cod_catg)-1;$i++){
				include($_SERVER['DOCUMENT_ROOT'].'/blog/componentes/tabela/tabela_categoria.php');
			}
			echo "</tbody> </table>";
	}
	
	function criaArrayQuerycatg($tabela){
		if(!empty($tabela)){
			if(mysql_num_rows($tabela)>0){
				$i=0;
				while($row=mysql_fetch_array($tabela)){
					$cod_catg[$i]   =$row['cod_catg'];
					$nom_catg[$i]   =$row['nom_catg'];
					$obs_catg[$i]   =$row['obs_catg'];
					$sta_ctg[$i]    =$row['sta_ctg'];
					$dathor_gtg[$i] =$row['dathor_gtg'];
					$i++;
				}                
				  return $lista=array($cod_catg,$nom_catg,$obs_catg,$sta_ctg,$dathor_gtg);           
			}else{return false;}
		}else{return false;}
	}
	
	function criarTabelacatg(){
		
	
	}

?>