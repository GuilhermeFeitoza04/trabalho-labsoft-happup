<?php
    require_once("usuarioController.php");
    require_once("session_tipo.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->

</head>
<body>
<section class="vh-100">
 <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="logo1.png" class="img-fluid" alt="" style="width: 200px;">
 </div>
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100"> 
    	<div class="col-md-9 col-lg-6 col-xl-5">
    		
	    </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style=" margin-top: 96px;">
        <form method="POST">
          <div class="d-flex flex-row align-items-center justify-content-center mt-5" style=" color:#345A8C ;">
            <h1 class="mb-5">Bem vindo</h1>
          </div>

          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="email" name="email" class="form-control form-control-lg"
              placeholder="Email" />
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-3">
            <input type="password" id="senha" name="senha" class="form-control form-control-lg"
              placeholder="Senha" />
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
               Lembre-me
              </label>
            </div>
            <a href="#!" class="text-body">Esqueceu sua senha?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button  type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;" name="acao" value="Logar">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-5 ">Não tem uma conta? <a href="cadastrarUsuario.php"
                class="link-danger mb-5">Cadastre-se</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>


</section>
	<footer
	class="text-center py-4 px-4 px-xl-5 footer navbar-fixed-bottom" style="background-color: #345A8C; margin-top: 176px;">


	<!-- Copyright -->
	<div class="text-white mb-3 mb-md-0">
	Copyright © 2024. Todos os direitos reservados.
	</div>
	<!-- Copyright -->

	<!-- Right -->
	</div>
</body>
</html>