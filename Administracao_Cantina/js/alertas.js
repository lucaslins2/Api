
function erroPadrao(erroTexto){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Algo deu errado, tente novament em instantes!',
        footer:'Erro: '+ erroTexto,
        showConfirmButton: false,
        showCloseButton: true
    })
}

function erroPadrao2(erroTexto,textoString){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: textoString,
        footer:'Erro: '+ erroTexto,
        showConfirmButton: false,
        showCloseButton: true
    })
}