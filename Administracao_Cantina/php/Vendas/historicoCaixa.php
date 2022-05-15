

<div class="container-fluid">
		<section class="row" id="compra">
			<div class="col-md-2" id="listagem" 	>
				<div id="lista">
					<h3 class="TituloH3" >Historico Caixa</h3>
					<div class="form-group">
						<span class="form-label">Status do Caixa</span></br>
						<select class="form-control" name="" id="">
							<option value="1">Caixa 1</option>
							<option value="2">Caixa 2</option>
						</select>
					</div>
					<p id="total-carrinho">Ultimos fechamentos</p>
					<div class="table-wrapper-scroll-y">
						<table class="mx-auto" id="carrinho">
							<thead>
							<th>Data</th>
							<th>Saldo Final.</th>
							</thead>
							<tbody>
								<tr id="carrinho-vazio">
									<td colspan="5" style="text-align: center; color: #888; padding: 10px;">Não há
										produtos na compra.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="TituloH3" >ABERTO</h3>
				<button class="btn btn-primary form-control-lg ml-3" id="btn-abrirCaixa" onclick="MsgBox('Voce Deseja Abrir o Caixa?');">Abrir Caixa F(4)</button>
					
					
					


				</div>


			</div>
			<div class="col-md-6" id="adicionar">
				<div class="row" id="detalhes">
				<div class="w-100">
						<h3 class="TituloH3" >Detalhes do Historico do Caixa</h3>
					</div>
		  <div class="col-md-12" id="listagem">
					<!--<p id="total-carrinho">Ultimos fechamentos</p>-->
					<div class="table-wrapper-scroll-y">
						<table class="mx-auto" id="minhaTabela">
							<thead>
							<th>Data/Hora</th>
							<th>Op.</th>
							<th>Dinheiro</th>
							<th>Saldo Final.</th>
							<th>Pix</th>
							<th>Cartão Credito</th>
							<th>Cartão Debito</th>	
							<th>Total</th>
							<th>Venda</th>
							<th>Historico</th>
							</thead>
							<tbody>
								<tr style="text-align: center">
								<td style="text-align: center">01/01/2000</td>
								<td>F</td>	
								<td>19,90</td>
								<td>21,9922222</td>	
								<td>0</td>	
								<td>0</td>
								<td>0</td>
								<td>31</td>
								<td>0001</td>
							
								<td>Fechamento Almoco</td>
							<!--</tr>
								<tr id="carrinho-vazio">
									<td colspan="5" style="text-align: center; color: #888; padding: 10px;">Não há
										produtos na compra.</td>
								</tr>--->
							</tbody>
						</table>
					</div>
					<!--<div class="BtnsFin"><button class="btn btn-dark form-control-lg ml-3" id="btn" disabled="">Imprimir Relatorios</button></div>-->
				</div>
				
			
				<!----
					<div class="col-md-3">
						<img src="img/000.jpg" class="img-fluid" id="imagem">
					</div>
					<div class="col-md-7">
						<h4>
							<strong>Código:</strong>
							<span id="codigo"></span>
						</h4>
						<h4>
							<strong>Descrição:</strong>
							<span id="descricao"></span>
						</h4>
						<h4>
							<strong>Preço: </strong>
							<span id="preco"></span>
						</h4>
						<h4>
							<strong>Preço total: </strong>
							<span id="total"></span>
						</h4>
						<h4>
							<strong>Estoque: </strong>
							<span id="estoque"></span>
						</h4>
					</div>
					<div class="col-md-2">
						<div class="align-middle" style="display: inline-block; margin-top: 50%">
							<div class="btn-group-vertical">
								<button class="btn btn-success" id="addProd" disabled><strong>+</strong></button>
								<button class="btn btn-danger" id="remProd" disabled><strong>-</strong></button>
							</div>
							&nbsp;
							<strong style="font-size: 18pt" class="align-middle" id="quantidade">0</strong>
						</div>
					</div>
					</div>
					<div class="row" id="entrada">
					<div class="col-sm-12">
						<form class="form-inline mt-3">
							<input type="text" class="form-control form-control-lg rounded-left" maxlength="3"
								placeholder="Insira o código do produto" id="search">
							<button class="btn btn-primary form-control-lg ml-3" id="btn-adicionar" disabled>Adicionar
								ao carrinho</button>
						</form>
					</div>--->
				</div>
				
			</div>
			<!-----
			<div class="col-md-3" id="listagem">
				<div id="lista">
					<h3>Produtos comprados</h3>

					<p id="total-carrinho">Total: <span>R$ 0,00</span></p>
					<div class="table-wrapper-scroll-y">
						<table class="mx-auto" id="carrinho">
							<thead>
								<th class="cod">Cód.</th>
								<th class="dsc">Descrição</th>
								<th class="qtd">Qtd.</th>
								<th class="prc">Prç.</th>
								<th class="tot">Total</th>
							</thead>
							<tbody>
								<tr id="carrinho-vazio">
									<td colspan="5" style="text-align: center; color: #888; padding: 10px;">Não há
										produtos na compra.</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		-->
		
			<div class="col-md-2" id="listagem" 	>
				<div id="lista">
					<h3>Resumo do Caixa</h3>
					<div class="form-group">
						<br>
							<div class="col-md-12">	<span class="form-label">Saldo Inicial: </span><span class="CxDiv">19,99</span></div></br>
					
					</div>
					<p id="total-carrinho">Totais de Entrada</p>
					<div class="table-wrapper-scroll-y">
						<table class="mx-auto" id="carrinho2">
							<thead>
							<th>Dinheiro:  </th>
							<th>R$: 30,00 </th>
							</thead>
							<thead>
							<th>PIX: </th>
							<th>R$: 3,99</th>
							</thead>
							<thead>
							<th>Cartao Credito: </th>
							<th>R$ 3,99</th>
							</thead>
							<thead>
							<th>Cartao Debito: </th>
							<th>R$ 3,99</th>
							</thead>
							<thead>
							<th>Total de Entrada: </th>
							<th>R$ 3,99</th>
							</thead>
						<!--	<tbody>
								<tr id="carrinho-vazio">
									<td colspan="5" style="text-align: center; color: #888; padding: 10px;">Não há
										produtos na compra.</td>
								</tr>
							</tbody>!-->
						</table>
					</div>
					<p id="total-carrinho">Totais de Saida</p>
					<div class="table-wrapper-scroll-y">
						<table class="mx-auto" id="carrinho2">
							<thead>
							<th>Dinheiro:  </th>
							<th>R$: 30,00 </th>
							</thead>
							<thead>
							<th>PIX</th>
							<th>R$: 3,99</th>
							</thead>
						
						<!--	<tbody>
								<tr id="carrinho-vazio">
									<td colspan="5" style="text-align: center; color: #888; padding: 10px;">Não há
										produtos na compra.</td>
								</tr>
							</tbody>!-->
						</table>
					</div>
				<button class="btn btn-primary form-control-lg ml-3" id="btn-abrirCaixa" onclick="MsgBox('Voce Deseja Fechar o Caixa?');">Abrir Caixa F(4)</button>
					
					
					


				</div>


			</div>
		</section>
		<!----
		<section class="row" id="cadastro">
			<div class="w-100">
				<h3 style="margin-bottom: 0">Cadastro de produtos</h3>
				<div></div>
				<div class="col-md-12">
					<form class="form-inline py-4">
						<div class="input-group">
							<div class="input-group-prepend">
								<label for="cCodigo" class="input-group-text"><strong>Código</strong></label>
							</div>
							<input type="text" maxlength="3" id="cCodigo" class="form-control" size="14"
								placeholder="Código de 3 dígitos">
							<div class="invalid-feedback">
								Por favor, digite um código válido.
							</div>
						</div>
						&emsp;
						<div class="input-group my-2">
							<div class="input-group-prepend">
								<label for="cDescricao" class="input-group-text"><strong>Descrição</strong></label>
							</div>
							<input type="text" id="cDescricao" class="form-control" size="30"
								placeholder="Descrição do produto">
							<div class="invalid-feedback">
								Insira uma descrição.
							</div>
						</div>
						&emsp;
						<div class="input-group my-2">
							<div class="input-group-prepend">
								<label for="cPreco" class="input-group-text"><strong>R$</strong></label>
							</div>
							<input type="text" id="cPreco" class="form-control" size="14"
								placeholder="Preço da unidade">
							<div class="invalid-feedback">
								Insira o preço.
							</div>
						</div>
						&emsp;
						<div class="input-group my-2">
							<div class="input-group-prepend">
								<label for="cEstoque" class="input-group-text"><strong>Estoque</strong></label>
							</div>
							<input type="number" id="cEstoque" class="form-control" size="14"
								placeholder="Quantidade em estoque">
							<div class="invalid-feedback">
								Informe a quantidade do produto em estoque.
							</div>
						</div>
						&emsp;
						<div class="input-group my-2">
							<div class="input-group-prepend">
								<label for="cImagem" class="input-group-text"><strong>Imagem</strong></label>
							</div>
							<input type="file" id="cImagem" class="form-control">
						</div>
					</form>
					<div id="buttons">
						<button class="btn btn-primary" id="listar-produtos" data-toggle="modal"
							data-target="#produtos-cadastrados">
							<strong><i class="fa fa-search"></i></strong>
						</button>
						<button class="btn btn-primary" id="cadastrar-produto">
							<strong><i class="fa fa-plus"></i></strong>
						</button>
					</div>
				</div>
		</section>--->
	</div>

