
<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
  
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.4/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

<?php
	include('Post.Class.php');
	include('../funcoes/post_funcoes.php');
	
	getTabelaPost();
	
	/*$teste= new Post();//"Titulo","desc","V",22,2,1,"2014/10/1",9,0,0,0,0,'NULL');
	
	$query= $teste->selectPost();*/
	

	
	/*$teste->setCod_post(1);
	if($teste->deletePost()){echo "Removido com sucesso";}
	
	echo '<br> getTitulo_post: '.$teste->getTitulo_post();
	echo '<br> getDescr_post: '.$teste->getDescr_post();
	echo '<br> getTip_post: '.$teste->getTip_post();
	echo '<br> getCod_doc: '.$teste->getCod_doc();
	echo '<br> getCod_bibl: '.$teste->getCod_bibl();
	echo '<br> getCod_usua: '.$teste->getCod_usua();
	echo '<br> getDathor_post: '.$teste->getDathor_post();
	echo '<br> getCod_cate: '.$teste->getCod_cate();
	echo '<br> getSta_post: '.$teste->getSta_post();
	echo '<br> getReqconfi_post: '.$teste->getReqconfi_post();
	echo '<br> getHierarq_post: '.$teste->getHierarq_post();
	echo '<br> getUnic_post: '.$teste->getUnic_post();
	echo '<br> getDatexpir_post: '.$teste->getDatexpir_post();*/

	//$teste->insertPost();
?>
<script type="text/javascript" >
$(document).ready( function () {
    $('#tab').DataTable();
} );
</script>