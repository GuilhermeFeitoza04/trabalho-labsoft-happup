<?php

require_once ("include_dao.php");
require_once("session_tipo.php");

$acao = isset($_POST['acao']) ? $_POST['acao'] : "";
$pesquisa = isset($_GET['pesquisa']) ? $_GET['pesquisa'] : "";
$usuarioModel = new Usuario();
$usuarioDAO = new UsuarioDAO();

if(empty($pesquisa)){
	$usuarios = $usuarioDAO->listarTodos();
}
else{
	$usuarios = $usuarioDAO->pesquisar($pesquisa);
}

$foto = isset($_FILES['foto']) ? $_FILES['foto'] : "";

	if(!empty($foto['name'])){
	$resultado = explode('.', $foto["name"]);
	$nome_f = $resultado[0];
	$tipo = $resultado[1];
	$novoNome =("usuario-".md5(time()*rand()).".".$tipo);
	$destino = "imgs/usuarios/$novoNome";
	move_uploaded_file($foto["tmp_name"], $destino);
	}else{
		$novoNome = "semfoto.png";
	}

	$usuarioModel->setFoto($novoNome);

$cod = isset($_POST['cod']) ? $_POST['cod'] : "";
$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$endereco = isset($_POST['endereco']) ? $_POST['endereco'] : "";
$tell = isset($_POST['tell']) ? $_POST['tell'] : "";
$senha = isset($_POST['senha']) ? $_POST['senha'] : "";
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : "";

$usuarioModel->setCod($cod);
$usuarioModel->setNome($nome);
$usuarioModel->setEndereco($endereco);
$usuarioModel->setTell($tell);
$usuarioModel->setTipo($tipo);
$usuarioModel->setEmail($email);
$usuarioModel->setSenha($senha);		

if($acao == "Logar"){

	$usuarioModel->setEmail($email);
	$usuarioModel->setSenha($senha);		
	$resultado = $usuarioDAO->logar($usuarioModel->getEmail(), $usuarioModel->getSenha());
	
	if($resultado == false){
		print("email ou senha INCORRETO!");
	} 
	
	else{
		$tipo = $resultado['tipo'];	
		if($tipo == "Funcionario"){
			session_start();
		    $_SESSION['tipo'] = 'Funcionario';
		    $_SESSION['usuario'] = $usuarioModel->getEmail();
			header("location:pet.php?msg=func");
		}
		else if ($tipo == "Cliente") {
			session_start();
			$_SESSION['tipo'] = 'Cliente';
			$_SESSION['usuario'] = $usuarioModel->getEmail();
			header("location:pet.php?msg=cliente");
		}
	}
}

else if($acao == "Adicionar"){	
	$usuarioDAO->inserir($usuarioModel);	
	header("location:usuarioView.php?msg=adicionado");
}
else if($acao == "add"){	
	$usuarioDAO->inserir($usuarioModel);	
	header("location:index.php?msg=adicionado");
}

else if($acao == "Deletar"){
	$usuarioDAO->deletar($usuarioModel->getCod());
	header("location:usuarioView.php?msg=excluido");
}

else if($acao == "Editar"){
	$usuarioDAO->atualizar($usuarioModel);	
	header("location:usuarioView.php?msg=editado");
}



?>