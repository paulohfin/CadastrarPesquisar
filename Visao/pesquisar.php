<?php
	require_once('cabecalho.php');
	require_once('../Controller/funcaoPesquisar.php');
?>
<html>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link " href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="cadastrar1.php">Cadastrar </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="#">Pesquisar </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="sobre.php">Sobre</a>
    </li>
  </ul>
</nav>
	<body>
		<div class='row'>
		<div class='col-md-2'></div>
		<div class='col-md-8'>
			<form method='post'>
				<label class="radio-inline"><input type="radio" name="optradio" value='nome'>NOME</label>
				<label class="radio-inline"><input type="radio" name="optradio" value='cpf'>CPF</label>
				<label class="radio-inline"><input type="radio" name="optradio" value='cargo'>CARGO</label>
				<label class="radio-inline"><input type="radio" name="optradio" value='salario'>SALARIO</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
					<input id="email" type="text" class="form-control" name="txt" placeholder="PESQUISAR">
				</div>
				<div class='col-md-2'></div>
				<div class='col-md-8'>
				<br>
				<br>
				<br>
				<button type="submit" class="btn btn-primary btn-block" name='pesquisar'>PESQUISAR</button>
				</div>
				<div class='col-md-2'></div>
			</form></div>
		<div class='col-md-2'></div>
		</div>
		<div class='row'>
		<div class='col-md-2'></div>
		<div class='col-md-8'>
			<table class="table table-hover">
    <thead>
      <tr>
        <th>NOME</th>
        <th>CPF</th>
        <th>ENDERECO</th>
        <th>TELEFONE</th>
        <th>ID</th>
        <th>CARGO</th>
        <th>SALARIO</th>
      </tr>
    </thead>
    <tbody>
	<?php
		if($lista)
			foreach($lista as $funcionario){
				echo '<tr>';
				echo '<td>'.$funcionario->getNome().'</td>';
				echo '<td>'.$funcionario->getCPF().'</td>';
				echo '<td>'.$funcionario->getEndereco().'</td>';
				echo '<td>'.$funcionario->getTelefone().'</td>';
				echo '<td>'.$funcionario->getId().'</td>';
				echo '<td>'.$funcionario->getCargo().'</td>';
				echo '<td>'.$funcionario->getSalario().'</td>';
				echo '</tr>';
			}
	?>
    </tbody>
  </table>
		<div class='col-md-2'></div>
		</div>
	</body>
</html>