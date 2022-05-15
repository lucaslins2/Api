$(document).ready(function(){
    $("#minhaTabela > tbody > tr").on('click', function() {
        alert("Abrindo Modal");
        ModalAjax("Vendas/historicoCaixaModal.php")
    });
  });


  function MsgBox(pergunta){

  
    Swal.fire({
      title: pergunta,
      showDenyButton: true,
      denyButtonText: 'Não',
      confirmButtonText: 'Sim',
      reverseButtons: true

    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        Swal.fire('Caixa Aberto', '', 'success')
      } 
    })
}

function ModalAjax(urlEndereco){
    $.ajax({
        url: '/Administracao_Cantina/php/' + urlEndereco,
        //Caso Sucesso ele retornara o HTML da pagina SOLICITADA localhost/[urlEndereco]
        //Para o elemento que tiver a classe resultado em seu HTML
        //De preferencia usar um DIV com essa classe
        success: function(result){

          Swal.fire({
            title: '<strong>HTML <u>example</u></strong>',
            icon: 'info',
            html:
                result,
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText:
                '<i class="fa fa-thumbs-up"></i> Great!',
            confirmButtonAriaLabel: 'Thumbs up, great!',
            cancelButtonText:
                '<i class="fa fa-thumbs-down"></i>',
            cancelButtonAriaLabel: 'Thumbs down'
            })
        },
        //Caso de algum erro
        error:function(XMLHttpRequest, textStatus, errorThrown){
            erroPadrao(errorThrown);
        }
    });


}