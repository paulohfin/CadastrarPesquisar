<?php
	require_once("Visao/cabecalho.php");
	
	if(isset($_POST['logar'])){
		header('Location: Visao/');
	}
?>

<html>

	<body>
	<div class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
	<h1>Bem Vindo</h1>
		<img src="imagem/capa.jpg" class="rounded-circle" alt="Cinque Terre" style="width:800px;height:600px;">
		<form method="POST">
			
			<input type='submit' name='logar' value="ENTRAR" class="btn btn-link">
			
		</form>
		</div>
		</div>
	</body>
</html>
