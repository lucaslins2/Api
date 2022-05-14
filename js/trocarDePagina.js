//A função espera o nome do arquivo php a ser aberto
//EX: localhost/[urlEndereco] -- Deve ser informador o que deve haver depois da barra
function trocarDePagina(urlEndereco){
    $.ajax({
        url: urlEndereco,
        //Caso Sucesso ele retornara o HTML da pagina SOLICITADA localhost/[urlEndereco]
        //Para o elemento que tiver a classe resultado em seu HTML
        //De preferencia usar um DIV com essa classe
        success: function(result){
            $(".resultado").html(result);
        },
        //Caso de algum erro
        error:function(XMLHttpRequest, textStatus, errorThrown){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algo deu errado, tente novament em instantes!',
                footer:'Erro: '+ errorThrown,
                showConfirmButton: false,
                showCloseButton: true
            })
        }
    });
}
