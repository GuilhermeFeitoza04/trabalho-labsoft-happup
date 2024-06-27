<?php 
	require_once("usuariocontroller.php");
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
        <form method="POST" enctype="multipart/form-data">
          <div class="d-flex flex-row align-items-center justify-content-center mt-5" style=" color:#345A8C ;">
            <h1 class="mb-5">Bem vindo</h1>
          </div>

        

          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="nome" class="form-control form-control-lg"
              placeholder="nome" />
          </div>

  		
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" name="email" class="form-control form-control-lg"
              placeholder="Email" />
          </div>

          
          <div data-validate="Enter password">
			<span class="btn-show-pass">
			<i class="zmdi zmdi-eye"></i>
			</span>
			<input class="form-control form-control-lg" type="password" name="senha"placeholder="Senha"/>
		  </div>
		  <br>



          <div data-mdb-input-init class="form-outline mb-3">
            <input type="text" name="tell" class="form-control form-control-lg"
              placeholder="Tell" />
          </div>


		  <div data-mdb-input-init class="form-outline mb-3">
            <input type="text" name="endereco" class="form-control form-control-lg"
              placeholder="Endereço" />
          </div>

           <div data-mdb-input-init class="form-outline mb-3">
            <input type="file" name="foto" class="form-control form-control-lg"
              placeholder="Escolha uma foto" />
          </div>




           <select  class="form-select" name="tipo" id="tipo" style="border: none;">
                <option disabled selected  >Selecione</option>
                <option value="Funcionario">Funcionário</option>
                <option  value="Cliente">Cliente</option>
              </select>


          <div class="text-center text-lg-start mt-4 pt-2">
            <button  type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem; " type="submit"value="add" name="acao" >criar conta</button>
            <button class="small fw-bold mt-2 pt-1 mb-5 ">voltar ao inicio? <a href="index.php"
                class="link-danger mb-5">aqui</a></button>
          </div>

        </form>
      </div>
    </div>
  </div>


</section>
</body>
</html>