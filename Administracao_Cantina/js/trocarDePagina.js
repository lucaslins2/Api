//A função espera o nome do arquivo php a ser aberto
//EX: localhost/[urlEndereco] -- Deve ser informador o que deve haver depois da barra
function trocarDePagina(urlEndereco){

    $.ajax({
        url: '/Administracao_Cantina/php/Generico/salvarPaginaAtual.php?urlEndereco=' + urlEndereco,
    });

    $.ajax({
        url: '/Administracao_Cantina/php/' + urlEndereco,
        //Caso Sucesso ele retornara o HTML da pagina SOLICITADA localhost/[urlEndereco]
        //Para o elemento que tiver a classe resultado em seu HTML
        //De preferencia usar um DIV com essa classe
        success: function(result){
            $(".resultado").html(result);
        },
        //Caso de algum erro
        error:function(XMLHttpRequest, textStatus, errorThrown){
            erroPadrao(errorThrown);
        }
    });
}
