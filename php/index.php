 <!-- Retirar isso de dentro da pasta, deixa no WWW-->
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- CSS pdrão -->
	<link rel="stylesheet" href="Administracao_Cantina/css/styles.css">

    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Administração de pedido</title>
  </head>
  <body>
    <?php include_once 'Administracao_Cantina/controller/conexao.php' ?>

<div class="d-flex" id="wrapper">
<div class="border-end bg-light" id="sidebar-wrapper">
	<div class="text-white text-center">
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="43" fill="red" class="bi bi-speedometer"
			 viewBox="0 0 16 16">
			<path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
			<path fill-rule="evenodd"
				  d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
		</svg>
		<h6 class="text-danger">Painel Administrativo</h6>
	</div>
	<div class="list-group list-group-flush">
		<ul class="list-unstyled ps-0">
			<li class="mb-1">
				<button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
						data-bs-target="#home-collapse" aria-expanded="false" onclick="trocarDePagina('test.php')">Estoque
        </button>
				<div class="collapse" id="home-collapse">
					<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small text-center">
						<li><a href="{{URL}}/consultar_produto" class="link-dark rounded">Consultar Produto</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
</div>

<div id="page-content-wrapper">
	<nav class="navbar navbar-expand-lg navbar-light bg-danger">
		<div class="container-fluid">
			<a class="text-dark" id="sidebarToggle" type="button">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="white" class="bi bi-list"
					 viewBox="0 0 16 16">
					<path fill-rule="evenodd"
						  d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
				</svg>
			</a>
			<a class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
			   data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			   aria-expanded="false" aria-label="Toggle navigation">
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="white" class="bi bi-list"
					 viewBox="0 0 16 16">
					<path fill-rule="evenodd"
						  d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
				</svg>
			</a>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mt-2 mt-lg-0">
					<li class="nav-item active"><a class="nav-link" href="{{URL}}/">
						<svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="white" class="bi bi-house"
							 viewBox="0 0 16 16">
							<path fill-rule="evenodd"
								  d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
							<path fill-rule="evenodd"
								  d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
						</svg>
					</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" role="button"
						   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="white"
								 class="bi bi-people-fill" viewBox="0 0 16 16">
								<path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
								<path fill-rule="evenodd"
									  d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
								<path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
							</svg>
						</a>
						<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{URL}}/">Home</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#!">Sair</a>
						</div>
					</li>
				</ul>
			</div>
		</div>

	</nav>
	
  <div class="resultado">a<div>
</div>


	<!--	{{footer}}-->
</div>


    <!-- Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Jquery JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- sweetalert2 - https://sweetalert2.github.io -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Script com Alertas Padrões -->
    <script src="Administracao_Cantina/js/alertas.js"></script>

    <!-- Script Ajax para trocar de pagina de forma dinamica -->
    <script src="Administracao_Cantina/js/trocarDePagina"></script>

    <!-- Script do Allan, não sei o que isso faz -->
    <script src="Administracao_Cantina/js/scripts.js"></script>
  </body>
</html>