<div class="row">
	<div class="col-lg-10">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-bar-chart-o"></i>Cadastro de Usuário</h3>
			</div>
			<div class="panel-body">
				<div class="cadUsua" >
					<form action="" class=""  method="post">
						<label class="campos" style="width:60%">Nome completo
							<input type="text" class="nomeUsua form-control" placeholder="Nome do Usuatema completo" name="nomeUsua">
						</label><br>
						<label class="campos" style="width:30%">Nome Usua.
							<input type="text" class="usuaUsua form-control" placeholder="Apelido do Usuatema" name="usuaUsua">
						</label>
						<label class="campos" style="width:30%">Email
							<input type="text" class="emailUsua form-control" placeholder="Apelido do Usuatema" name="emailUsua">
						</label><br>
						<label class="campos" style="width:30%"> Senha
							<input type="text" class="senhaUsua form-control" placeholder="domínio do Usuatema" name="senhaUsua">
						</label>
						<label class="campos" style="width:30%"> Cnfirmar Senha
							<input type="text" class="confSenhaUsua form-control" placeholder="domínio do Usuatema" name="confSenhaUsua">
						</label><br>
						<label class="gropoUsua campos" style="width:30%" name="gropoUsua"> Grupo
							<select class="form-control">
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
							</select>
						</label>
						<label class=" campos" style="width:30%" >Cor do Painel
							<input type="color" class="corUsua form-control" placeholder="domínio do Usuatema" name="corUsua">
						</label><br>
						<label class="campos" style="width:30%">Desativar
							<input type="checkbox" id="checkboxSuccess" value="1" name="ativo">
						</label><br>
						<label class="campos"> Logo
							<input type="file" id="imgUsua" name="imgUsua">
								<p class="help-block" style="font-size:11pt;"> Faça Upload da imagem, tamanhao max 500Mb</p>
							</label>
							<br>
							<span style="float:right;">
								<button type="button" class="cancelar btn btn-default">Cancelar</button>
								<button type="button" class="gravUsua btn btn-success">Gravar</button>
							</span>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
