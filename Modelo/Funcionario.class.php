<?php
	class Funcionario extends Pessoa{
		public $id;
		public $cargo;
		public $salario;
		public function __construct($nome, $CPF, $endereco, $telefone, $id, $cargo, $salario){
			parent::__construct($nome, $CPF, $endereco, $telefone);
			$this->cargo = $cargo;
			$this->salario = $salario;
			$this->id = $id;
		}
		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
		public function getCargo(){
			return $this->cargo;
		}
		public function setCargo($cargo){
			$this->cargo = $cargo;
		}
		public function getSalario(){
			return $this->salario;
		}
		public function setSalario($salario){
			$this->salario = $salario;
		}		
	}
?>