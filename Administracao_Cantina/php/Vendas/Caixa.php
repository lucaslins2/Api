<section class="row" id="compra">
				<div class="col-md-5" id="listagem">
					<div id="lista">
						<h3 class="TituloH3">Produtos comprados</h3>

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
								   <tr class="ItemCarrinho">
								    <td class="cod">01</td>
									<td class="dsc">PAO NA CHAPA</td>
									<td class="qtd">2</th>
									<td class="prc">R$ 6,80</td>
									<td class="tot">R$ 13,6</td>
									</tr>
									<tr class="ItemCarrinho">
								    <td class="cod">02</td>
									<td class="dsc">Coxinha</td>
									<td class="qtd">2</th>
									<td class="prc">R$ 4,80</td>
									<td class="tot">R$ 9,6</td>
									</tr>

									<tr id="carrinho-vazio">
										<td colspan="5" style="text-align: center; color: #888; padding: 10px;">Não há produtos na compra.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="TituloH4">
					<h4>Total A Pagar: R$ 23,20</h4>
					</div>
				</div>
				<div class="col-md-7" id="adicionar">
					<div class="row" id="detalhes">
						<div class="w-100"><h3 class="TituloH3">Detalhes do produto</h3></div>

						<!---<div class="col-md-3">
							<img src="img/000.jpg" class="img-fluid" id="imagem">
						</div>!-->
						<div class="col-md-7">
								<h4>
									<strong>Código: 0001</strong>
									<span id="codigo"></span>
								</h4>
								<h4>
									<strong>Descrição: PAO NA CHAPA</strong>
									<span id="descricao"></span>
								</h4>
								<h4>
									<strong>Preço: 6,80</strong>
									<span id="preco"></span>
								</h4>
								<h4>
									<strong>Preço total: 6,80</strong>
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
									<button class="btn btn-success" id="addProd" ><strong>+</strong></button>
									<button class="btn btn-danger" id="remProd" ><strong>-</strong></button>
								</div>
								&nbsp;
								<strong style="font-size: 18pt" class="align-middle" id="quantidade">0</strong>
							</div>
						</div>
                    <div class="col-md-12">
                        <div class="row" id="">
						   <div class="col-sm-12">
                                <form class="form-inline mt-3">
                                    <input type="text" class="form-control form-control-lg rounded-left" maxlength="12" placeholder="Insira o código do produto" id="search">
                                    <button class="btn btn-primary form-control-lg ml-3" id="btn-adicionar" >Adicionar ao carrinho</button>
                                </form>
						</div>
                    </div>   
			 </div>

					</div>
				
				</div>
                <div class="forma-pagamento float-right">
					<br />
					<button class="btn btn-success">
						<i class="fa fa-money" aria-hidden="true"></i>
						F2 - NOV VENDA
					</button>
					<!--<a href="pagamento.html">-->
						<button onclick="trocarDePagina('Vendas/CaixaPedidoFinaliar.php');" class="btn btn-info">
							<ion-icon name="card-outline"></ion-icon>
							F4 - FINALIZA VENDA
						</button>
					
					<button class="btn btn-dark">
						F5 - CANCELA VENDA
					</button>
					<a href="login.html">
						<button class="btn btn-warning">
							F7 - FEC. CAIXA
						</button>
					</a>
				</div>
			</section>