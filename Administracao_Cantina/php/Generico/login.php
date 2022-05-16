<div class="d-flex flex-column justify-content-center align-items-center" style="height: 100%;">

<div class="h1 mb-4">Administração de Pedido</div>

    <div class="card" style="width: 25rem;">
        <div class="card-body">
            <form id="formulario">
                <div class="mb-3">
                    <label for="inputLogin" class="form-label">Login</label>
                    <input type="login" class="form-control" id="inputLogin" name="login" required>
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="Check1">
                    <label class="form-check-label" for="Check1">Salvar credenciais?</label>
                </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Entrar</button>
            </form>
        </div>
    </div>

</div>


<script>
    const myForm = document.getElementById("formulario");

myForm.addEventListener("submit",(e)=>{
    e.preventDefault();

    $.ajax({
        url: '/Administracao_Cantina/php/Generico/validarLogin.php',
        type:'POST',
        data: $('#formulario').serialize(),
        success: function(result){
            window.location.assign("index.php");
        },
        //Caso de algum erro
        error:function(XMLHttpRequest, textStatus, errorThrown){
            erroPadrao(errorThrown);
        }
    });
})

</script>