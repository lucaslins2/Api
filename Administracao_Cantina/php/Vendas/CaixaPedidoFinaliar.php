<div class="container">
    <section id="finalizar-pagamento">
      <div class="title">
        Finalizar Venda
      </div>
    </section>

    <section id="valores">
      <div class="row valores">
        <div class="col-md-7 numeros">
          <div>
            <h4>R$ Sub Total</h4>
            <span>23,00</span>
          </div>
          <div>
            <h4>R$ Desconto nos Itens</h4>
            <span>-0,30</span>
          </div>
          <div>
            <h4>R$ Desconto Geral</h4>
            <span>-1,20</span>
          </div>
          <div>
            <h4>R$ Acréscimo </h4>
            <span>+0,02</span>
          </div>
        </div>
        <div class="col-md-5 total">
          <h5>R$ Total a pagar</h5>
          <h1>R$ 21,15</h1>
        </div>
      </div>
    </section>

    <section id="forma-pagamento">
      <div class="forma-pagamento">        
        <button  onclick="MetodosPGgTO();" class="btn btn-success">                    
          <i class="material-icons"></i>
          Dinheiro
        </button>

        <button onclick="MetodosPGgTO();" class="btn btn-info">
          <ion-icon name="card-outline"></ion-icon>
          Cartão Debito
        </button>

        <button onclick="MetodosPGgTO();" class="btn btn-dark">
        Cartão Crédito
        </button>

        <button onclick="MetodosPGgTO();" class="btn btn-warning">
          PIX
        </button>
      </div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Seq</th>
            <th scope="col">Forma de Pagamento</th>
            <th scope="col">Nº Parc.</th>
            <th scope="col">Valor</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Cartão de Crédito</td>
            <td>1</td>
            <td>R$ 3,88</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Dinheiro</td>
            <td>1</td>
            <td>R$ 15,88</td>
          </tr>
        </tbody>
      </table>
    </section>

    <section id="fechamento">
      <div class="row fechamento">
        <div class="col-md-3 total-valor">
          <p>R$ Total a Pagar</p>
          <h1 style="color: #337ab7">R$ 21,15</h1>
        </div>
        <div class="col-md-3 total-valor">
          <p>R$ Valor Pago</p>
          <h1 style="color: #3c763c;">R$ 19,76</h1>
        </div>
        <div class="col-md-3 total-valor">
          <p>R$ Saldo a Pagar</p>
          <h1 style="color:#8a6d3b">R$ 1,39</h1>
        </div>
        <div class="col-md-3 total-valor">
          <p>R$ Troco</p>
          <h1 style="color:#a94442">R$ 0,00</h1>
        </div>
      </div>
    </section>

    <section id="acoes-finais">
      <div class="row">
      <div class="col-md-2">
       
       <button onclick="trocarDePagina('Vendas/Caixa.php')" class="btn btn-info">Voltar</button>
  
   </div>
        <div class="col-md-2">
       
            <button onclick="MsgBox('Voce DesejA Cancelar o Pedido?');" class="btn btn-danger">Cancelar</button>
       
        </div>
        <div class="col-md-6">
          <label for="vendedor" style="display: inline-block;">Cliente(a):</label>
          <select class="form-control" id="vendedor" style="display: inline-block; width: 83%;">
            <option value="1">Thiago Malaquias</option>
            <option value="2">Robson Mendonça</option>
            <option value="3">Lucas Gomes</option>
          </select>
        </div>
        <div class="col-md-2" style="text-align:end">
            <button onclick="MsgConfir();" class="btn btn-primary">Confirmar</button>
        </div>
      </div>
    </section>
    <br>

</div>