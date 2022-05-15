<section class="row" id="compra">
				<div class="col-md-5" id="listagem">
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
										<td colspan="5" style="text-align: center; color: #888; padding: 10px;">Não há produtos na compra.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-7" id="adicionar">
					<div class="row" id="detalhes">
						<div class="w-100"><h3>Detalhes do produto</h3></div>

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
                    <div class="col-md-12">
                        <div class="row" id="">
						   <div class="col-sm-12">
                                <form class="form-inline mt-3">
                                    <input type="text" class="form-control form-control-lg rounded-left" maxlength="3" placeholder="Insira o código do produto" id="search">
                                    <button class="btn btn-primary form-control-lg ml-3" id="btn-adicionar" disabled>Adicionar ao carrinho</button>
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
					<a href="pagamento.html">
						<button class="btn btn-info">
							<ion-icon name="card-outline"></ion-icon>
							F4 - FINALIZA VENDA
						</button>
					</a>
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