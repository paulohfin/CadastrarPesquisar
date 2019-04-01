<?php
	class Pessoa{
		public $nome;
		public $CPF;
		public $endereco;
		public $telefone;
		public function __construct($nome, $CPF, $endereco, $telefone){
			$this->nome = $nome;
			$this->CPF = $CPF;
			$this->endereco = $endereco;
			$this->telefone = $telefone;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getCPF(){
			return $this->CPF;
		}
		public function setCPF($CPF){
			$this->CPF = $CPF;
		}
		public function getEndereco(){
			return $this->endereco;
		}
		public function setEndereco($endereco){
			$this->endereco = $endereco;
		}
		public function getTelefone(){
			return $this->telefone;
		}
		public function setTelefone($telefone){
			$this->telefone = $telefone;
		}
	}
?>