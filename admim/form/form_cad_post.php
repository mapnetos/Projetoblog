<div class="row">
	<div class="col-lg-10">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-bar-chart-o"></i>Cadastrar Posto</h3>
			</div>
			<div class="panel-body">
				<div class="cadUsua" >
					<form action="" class=""  method="post">
						<label class="campos" style="width:100%;">Título
							<input type="text" class="TituloPost form-control" placeholder="Título do post" name="TituloPost">
						</label><br>
						<label class="campos" style="width:100%;">Descrição
							<textarea  placeholder="Descrição do post" class="descPost form-control"  name="descPost">
							</textarea>
						</label><br>
						<label class="gropoUsua campos" style="width:;" name="gropoUsua"> Categoria
							<select class="form-control">
							  <option>informativo</option>
							  <option>Alerta</option>
							  <option>Comunicado</option>
							  <option>outros</option>
							  <option>...</option>
							</select>
						</label>
						<label class="gropoUsua campos" style="width:;" name="gropoUsua"> Tipo de Ilustração
							<select class="form-control">
							  <option>Sem ilustração</option>
							  <option>Ilustrar com imagem</option>
							  <option>Ilustrar com vídeo</option>
							  <option>Com galegia de imagem</option>
							  <option>...</option>
							</select>
						</label>
						<label class="gropoUsua campos" style="width:;" name="gropoUsua"> Opçõe ilustrções
							<select class="form-control">
							  <option>imagem de teste</option>
							  <option>testando imagem</option>
							  <option>a testar</option>
							  <option>outro teste</option>
							  <option>...</option>
							</select>
						</label>
						<label class="gropoUsua campos" style="width:;" name="gropoUsua"> Grau de hierarquia
							<select class="form-control">
							  <option>Normal</option>
							  <option>Alta</option>
							  <option>Baixa</option>
							  <option>...</option>
							</select>
						</label>
						<br>
						<label class="campos" style="width:5%; font-size:9pt;" title="unico p essa categoria, marcando essa opc desativará todos os postes dessa categoria exeto este">P.Único							
							<input type="checkbox" class="boot-switch" id="checkboxSuccess" value="1" name="ativo">
						</label>
						<label class="campos" style="width:5%; font-size:9pt; margin:30px;">Desativar
							<input type="checkbox" class="boot-switch" id="checkboxSuccess" value="1" name="ativo" CHECKED>
						</label>
						<label class="campos" style="width:5%" title="exigir confirmação">comfirma
							<input type="checkbox" class="boot-switch" id="checkboxSuccess" value="1" name="ativo">
						</label>
						<br>
						
						<label class="campos"> Upload da imagem
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
