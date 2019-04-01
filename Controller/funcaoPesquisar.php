<?php
	require_once('banco.php');
	require_once('../Modelo/Pessoa.class.php');
	require_once('../Modelo/Funcionario.class.php');
	
	$conn = '';
	$lista = array();
	$sql = '';
	$result;
	if(isset($_POST['pesquisar'])){
		$lista2 = '';
		$conn = open_database();
		switch($_POST['optradio']){
			case 'nome':
				$sql = 'select * from pessoa as p left join funcionario as f on p.cpf = f.CPF_pessoa where p.nome LIKE "%' . $_POST['txt'] . '%";';
				$result = $conn->query($sql);
				if($result)
					$lista2 = $result->fetch_all(MYSQLI_ASSOC);
				foreach($lista2 as $pessoa)
					array_push($lista, new Funcionario($pessoa['nome'], $pessoa['CPF'], $pessoa['endereco'], $pessoa['telefone'], $pessoa['id'], $pessoa['cargo'], $pessoa['salario'] ));
				//print_r($lista);
			break;
			case 'cpf':
				$sql = 'select * from pessoa as p left join funcionario as f on p.cpf = f.CPF_pessoa where p.CPF = "' . $_POST['txt'] . '";';
				$result = $conn->query($sql);
				if($result)
					$lista2 = $result->fetch_all(MYSQLI_ASSOC);
				foreach($lista2 as $pessoa)
					array_push($lista, new Funcionario($pessoa['nome'], $pessoa['CPF'], $pessoa['endereco'], $pessoa['telefone'],  $pessoa['id'], $pessoa['cargo'], $pessoa['salario'] ));
				//print_r($lista);
			break;
			case 'cargo':
				$sql = 'select * from pessoa as p left join funcionario as f on p.cpf = f.CPF_pessoa where f.cargo LIKE "%' . $_POST['txt'] . '%";';
				$result = $conn->query($sql);
				if($result)
					$lista2 = $result->fetch_all(MYSQLI_ASSOC);
				foreach($lista2 as $funcionario)
					array_push($lista, new Funcionario($pessoa['nome'], $pessoa['CPF'], $pessoa['endereco'], $pessoa['telefone'], $pessoa['id'],  $pessoa['cargo'], $pessoa['salario'] ));					
				//print_r($lista);
			break;
			case 'salario':
				$sql = 'select * from pessoa as p left join funcionario as f on p.cpf = f.CPF_pessoa where f.salario = ' . $_POST['txt'] . ';';
				$result = $conn->query($sql);
				if($result)
					$lista2 = $result->fetch_all(MYSQLI_ASSOC);
				foreach($lista2 as $funcionario)
					array_push($lista, new Funcionario($pessoa['nome'], $pessoa['CPF'], $pessoa['endereco'], $pessoa['telefone'], $pessoa['id'],  $pessoa['cargo'], $pessoa['salario'] ));					
				//print_r($lista);
			break;
		}
		$conn->close();
	}
?>
