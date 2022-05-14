
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