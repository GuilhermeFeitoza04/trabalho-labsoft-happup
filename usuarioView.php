<?php 
	require_once("usuariocontroller.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta nome="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="scriptExcluir.js"></script>
<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: "Varela Round", sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
<div class="container-xl">
	<?php
		include('mensagens.php');
	?>
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gerenciar <b>Usuario</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Adicionar novo usuario</span></a>					
					</div>
				</div>
			</div>
			<div class="row">
				<form method="GET" class="col-12 mb-2">
					<div class="input-group">
					     	<input class="form-control py-2" type="search" name="pesquisa" placeholder="Pesquisar usuários" value="" id="example-search-input">
					      	<span class="input-group-append">
					        	<button class="btn btn-outline-secondary" type="submit" name="acao" value="Pesquisar">
					            	<i class="fa fa-search"></i>
					        	</button>
					      	</span>
					</div>
		        </form>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Foto</th>
						<th>Cod</th>
						<th>Nome</th>
						<th>Email</th>
						<th>Endereço</th>
						<th>Telefone</th>
						<th>tipo</th>
						<th>Senha</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($usuarios as $usuario) {	?>
					<tr>
						<td class="align-items-center">
							<img src="imgs/usuarios/<?=$usuario['foto']?>" class="rounded-circle" style="height: 100px; width: 100px;">
						</td>
						<td><?=$usuario['cod']?></td>
						<td><?=$usuario['nome']?></td>
						<td><?=$usuario['email']?></td>
						<td><?=$usuario['endereco']?></td>
						<td><?=$usuario['tell']?></td>
						<td><?=$usuario['tipo']?></td>
						<td><?=$usuario['senha']?></td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" onclick="setDadosModalEditar(<?=$usuario['cod']?>,'<?=$usuario['nome']?>','<?=$usuario['email']?>','<?=$usuario['endereco']?>','<?=$usuario['tell']?>','<?=$usuario['senha']?>','<?=$usuario['tipo']?>')" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete"onclick="setDadosModalExcluir(<?=$usuario['cod']?>)">&#xE872;</i></a>
						</td>
					</tr>
						<?php } ?>

				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Mostrando <b>5</b> fora de <b>25</b> entradas</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Anterior</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Proximo</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Adicionar Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Adicionar Usuario</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nome</label>
						<input type="text" class="form-control" required name="nome">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required name="email">
					</div>
					<div class="form-group">
						<label>Endereço</label>
						<textarea class="form-control" required name="endereco"></textarea>
					</div>
					<div class="form-group">
						<label>Telefone</label>
						<input type="text" class="form-control" required name="tell">
					</div>
					<div class="form-group">
						<label>Senha</label>
						<input type="text" class="form-control" required name="senha">			
					</div>
					<div class="form-group">
						<label>Tipo</label>
						<input type="text" class="form-control" required name="tipo">			
					</div>
					<div class="form-group">	
						<label>Foto</label>
						<div class="input-group mb-3">
							<div class="custom-file">
							    <input type="file" class="custom-file-input" id="inputGroupFile01" name="foto">
							    <label class="custom-file-label" for="inputGroupFile02">Escolha uma foto</label>
							</div>
						</div>	
					</div>		

				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Adicionar" name="acao">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Editar Usuario</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
					<div class="form-group d-flex justify-content-center">
						<img src="imgs/semfoto.png" class="rounded-circle" style="height: 100px; width: 100px;">		
					</div>
					<div class="form-group">
						<input type="hidden" class="form-control" required name="cod" id="editarCod">
					</div>			
						<div class="form-group">
						<label>Nome</label>
						<input type="text" class="form-control" required name="nome" id="editarNome">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required name="email" id="editarEmail">
					</div>
					<div class="form-group">
						<label>Endereço</label>
						<textarea class="form-control" required name="endereco" id="editarEndereco"></textarea>
					</div>
					<div class="form-group">
						<label>Telefone</label>
						<input type="text" class="form-control" required name="tell" id="editarTell">
					</div>
					<div class="form-group">
						<label>Senha</label>
						<input type="text" class="form-control" required name="senha" id="editarSenha">			
					</div>
					<div class="form-group">
						<label>Tipo</label>
						<input type="text" class="form-control" required name="tipo" id="editarTipo">			
					</div>	
					<div class="form-group">	
						<label>Foto</label>
						<div class="input-group mb-3">
							<div class="custom-file">
							    <input type="file" class="custom-file-input" id="inputGroupFile01" name="foto">
							    <label class="custom-file-label" for="inputGroupFile02">Escolha uma foto</label>
							</div>
						</div>	
					</div>			
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Editar" name="acao">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Deletar usuário</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
				<input type="hidden" name="cod" id="excluirCod">					
					<p>Tem certeza de que deseja excluir esses registros?</p>
					<p class="text-warning"><small>Essa ação não pode ser desfeita!</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Deletar" name="acao">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>