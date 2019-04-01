<?php
	require_once("banco.php");
	
	if(isset($_POST['proximo'])){
		$conn = open_database();
		$SQL = "INSERT INTO PESSOA(nome, CPF, endereco, telefone) VALUES ('".$_POST['nome'].
		"','".$_POST['cpf']."','".$_POST['endereco']."','".$_POST['telefone']."');";
		$result = $conn->query($SQL);
		if($result){
			$conn->close();
			header("Location:cadastrar2.php?CPF=".$_POST['cpf']."");
		}
	}
	if(isset($_POST['proximo2'])){
		$conn = open_database();
		$SQL = "INSERT INTO funcionario(cargo, salario, CPF_pessoa) VALUES ('".$_POST['cargo'].
				"',".$_POST['salario'].",'".$_GET["CPF"]."');";
		echo $SQL;
		$result = $conn->query($SQL);
		if($result){
			$conn->close();
			header("Location:index.php");	
		}
		else
			echo $conn->error;
	}
	if(isset($_POST['voltar'])){
		header("Location:index.php");
	}
?>
