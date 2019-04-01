<?php
	require_once('cabecalho.php');
	require_once('../Controller/funcaoCadastrar.php');
?>
<html>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link " href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="#">Cadastrar </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pesquisar.php">Pesquisar </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="sobre.php">Sobre</a>
    </li>
  </ul>
</nav>
	<body>
	<form method="post">
		<div class='row'>
			<div class="col-md-2"></div>
				<div class="col-md-8">
				<h3>Cadastrar Pessoa</h3>
				<label>Nome :</label>
				<div class="input-group">
				  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input type="text" class="form-control" name="nome" placeholder="Nome">
				</div>
				<label>CPF :</label>
				<div class="input-group">
				  <span class="input-group-addon">CPF</span>
				  <input type="text" class="form-control" name="cpf" placeholder="CPF">
				</div>
				<label>Endereço :</label>
				<div class="input-group">
				  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
				  <input type="text" class="form-control" name="endereco" placeholder="Endereço">
				</div>
				<label>Telefone :</label>
				<div class="input-group">
				  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
				  <input type="text" class="form-control" name="telefone" placeholder="Telefone">
				</div
				<br>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2"><button type="submit" class="btn btn-primary btn-block" name='voltar'>VOLTAR</button></div>
			<div class="col-md-4"></div>
			<div class="col-md-2"><button type="submit" class="btn btn-primary btn-block" name='proximo'>AVANÇAR</button></div>
		</div>
	</body>
	</form>
</html>