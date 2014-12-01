
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Deep Blue Admin</title>
	<!-- bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../pluguins/bootstrap/css/bootstrap.min.css" />
	<!-- DataTables CSS -->
	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />
	<!-- bootstrap_switch css -->
	<link rel="stylesheet" type="text/css" href="../pluguins/bootstrap_switch/css/bootstrap3/bootstrap-switch.min.css"/>
	<!-- icheck css -->
	<link rel="stylesheet" type="text/css" href="../pluguins/icheck/skins/line/purple.css" />
	<!-- jquery 2.1.1 jS -->
    <script type="text/javascript" src="../pluguins/jquery/jquery.min.js"></script>
	<!-- bootstrap jS -->
    <script type="text/javascript" src="../pluguins/bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/shieldui-all.min.css" />
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
	<!-- DataTables -->
	<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.4/js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<!-- bootstrap_switch js -->
	<script type="text/javascript" charset="utf8" src="../pluguins/bootstrap_switch/js/bootstrap-switch.min.js"></script>
	<!-- icheck js -->
	<script type="text/javascript" charset="utf8" src="../pluguins/icheck/icheck.min.js"></script>
	
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <?php include_once('menu_topo.php'); ?> 
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Painel Administrativo <small>Inicio</small></h1>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       Bem-vindo ao painel de administração! Sinta-se livre para rever todas
                    </div>
                </div>
            </div>

            <div class="row">
               <?php //include_once("widgate/painel_contagem.php") ?>
            </div>

            <div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i>Cadastro/Postagens</h3>
                        </div>
                        <div class="panel-body">
							<div role="tabpanel">
							  <!-- Nav tabs -->
							  <ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#Post" aria-controls="Post" role="tab" data-toggle="tab">Post</a></li>
								<li role="presentation"><a href="#categoria" aria-controls="categoria" role="tab" data-toggle="tab">Categoria</a></li>
								<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
								<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
							  </ul>

							  <!-- Tab panes -->
							  <div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="Post">
									<nav class="navbar navbar-default" role="navigation" style="background:#EFF5F7; border-color:#ABDBF4; padding:0px;"><!-- botão para incluir novo -->
										<button type="button" class="btn btn-default" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i></button>
									</nav>
								<?php
									include($_SERVER['DOCUMENT_ROOT'].'/blog/funcoes/php/post_funcoes.php');
									getTabelaPost();
								?></div>
								<div role="tabpanel" class="tab-pane" id="categoria"> <?php 
								include($_SERVER['DOCUMENT_ROOT'].'/blog/funcoes/php/categoria_funcoes.php');
										getTabelaCatg(); ?> </div>
								<div role="tabpanel" class="tab-pane" id="messages"><?php include_once('form/form_cad_usua.php'); ?></div>
								<div role="tabpanel" class="tab-pane" id="settings"><?php include_once('form/form_cad_sis.php'); ?> </div>
							  </div>

							</div>
                        </div>
                    </div>
                </div> 
            </div>
				
					
					 
					
        </div>
		
		
		
		<!---  retira a sombra da modal  --->
		<style>
			.modal-backdrop{
				background-color:#fff;
			}
		</style>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="background-color: rgba(255, 255, 255, 0.7)!important;">
			<div class="modal-dialog modal-lg">	
					<?php include('form/form_cad_post.php'); ?>

			</div>
		</div>
    </div>
    <!-- /#wrapper -->

    <script type="text/javascript">
	//data table
	
	
	$(document).ready(function() {
		$('#tab').dataTable( {
			"language": {
				"lengthMenu": "Display _MENU_ registros por páginae",
				"zeroRecords": "Nada foi encontrado",
				"info": " página  _PAGE_ de _PAGES_",
				"infoEmpty": "Não há registros disponíveis",
				"infoFiltered": "(filtrada a partir de _MAX_ total de registros)"
			}
		} );
		
		$('#tabCatg').dataTable( {
			"language": {
				"lengthMenu": "Display _MENU_ registros por páginae",
				"zeroRecords": "Nada foi encontrado",
				"info": " página  _PAGE_ de _PAGES_",
				"infoEmpty": "Não há registros disponíveis",
				"infoFiltered": "(filtrada a partir de _MAX_ total de registros)"
			}
		} );
	} );
	//------------------
	/*$('.boot-switchf').bootstrapSwitch('onColor', 'success');
	$('.boot-switchf').bootstrapSwitch('size', 'mini');
	$('.boot-switchf').bootstrapSwitch('offColor', 'danger');
	$('.boot-switchf').bootstrapSwitch('data-indeterminate','true');
	
  $(function () {
    $('#profile a:last').tab('show')
  })*/
</script>

    </script>
</body>
</html>
