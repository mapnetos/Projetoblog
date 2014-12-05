<div class="row">
	<div class="col-lg-10">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-bar-chart-o"></i>Cadastrar Posto</h3>
			</div>
			<div class="panel-body">
				<div class="cadUsua" >
					<form action="../funcoes/php/post.php" class=""  method="POST" enctype="multipart/form-data">
						<label class="campos" style="width:100%;">Título
							<input type="text" class="TituloPost form-control" placeholder="Título do post" name="tituloPost">
						</label><br>
						<label class="campos" style="width:100%;">Descrição
							<textarea  placeholder="Descrição do post" class="descPost form-control"  name="descrPost">
							</textarea>
						</label><br>
						<label class="codCate campos" style="width:;" name=""> Categoria
							<select class="form-control" name='codCate'>
							  <option>informativo</option>
							  <option>Alerta</option>
							  <option>Comunicado</option>
							  <option>outros</option> 
							  <option>...</option>
							</select>
						</label>
						<label class="tipPost campos" style="width:;" name=""> Tipo de Ilustração
							<select class="form-control" name="tipPost">
							  <option value="1">Sem ilustração</option>
							  <option value="2">Ilustrar com imagem</option>
							  <option value="3">Ilustrar com vídeo</option>
							  <option value="4">Com galegia de imagem</option>
							  <option value="5">...</option>
							</select>
						</label>
						<label class="codDoc campos" style="width:;" name=""> Opçõe ilustrções <!--- caso ele seleciona a imagem não precisa enviar o upload  --->
							<select class="form-control" name="codDoc">
							<option ></option>
							  <option value="1">imagem de teste</option>
							  <option value="2">testando imagem</option>
							  <option value="2">a testar</option>
							  <option value="4">outro teste</option>
							  <option value="5">...</option>
							</select>
						</label>
						<label class="hierarqPost campos" style="width:;" name=""> Grau de hierarquia
							<select class="form-control" name="hierarqPost">
							  <option>Normal</option>
							  <option>Alta</option>
							  <option>Baixa</option>
							  <option>...</option>
							</select>
						</label>
						<br>
						<label class="reqconfiPost campos" style="float:left;" title="exigir confirmação">URL do video
							<input type="text" class="urlVideo form-control" placeholder="http://www.lovaldovideo..." name="urlVideo">
						</label>
						<label class="reqconfiPost campos" style="float:left; margin-left:10px;" title="exigir confirmação" disabled>Data de Expiraração
							<input type="date" class="datexpirPost form-control" placeholder="DD/MM/AAAA" name="datexpirPost">
						</label>
						<br>
						<label class="unicPost campos" style="width:5%; font-size:9pt;  float:left; margin-left:15px;" title="unico p essa categoria, marcando essa opc desativará todos os postes dessa categoria exeto este">P.Único							
							<input type="checkbox" class="boot-switch" id="checkboxSuccess" value="1" name="unicPost">
						</label>
						<label class="staPost campos" style="width:5%; font-size:9pt; float:left;  margin-left:15px;">Desativar
							<input type="checkbox" class="boot-switch" id="checkboxSuccess" value="1" name="staPost" CHECKED>
						</label>
						<label class="reqconfiPost campos" style="width:5% ;float:left; margin-left:25px" title="exigir confirmação">comfirma
							<input type="checkbox" class="boot-switch" id="checkboxSuccess" value="1" name="reqconfiPost">
						</label>
						<br>
						
						<label class="campos"> Upload da imagem
							<input type="file" id="imgPost" name="imgPost">
								<p class="help-block" style="font-size:11pt;"> Faça Upload da imagem, tamanhao max 500Mb</p>
							</label>
							<br>
							<span style="float:right;">
								<button type="button" class="cancelar btn btn-default" data-dismiss="modal">Cancelar</button>
								<button type="submit" class="gravPost btn btn-success" >Gravar</button>
							</span>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
