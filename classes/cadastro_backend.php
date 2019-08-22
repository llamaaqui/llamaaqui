<?php

require_once "site.php";

class Cadastro extends Site {


	public $nome;
	public $email;
	public $senha;
	public $senha2;
	public $sexo;
	public $data_nascimento;
	public $telefone;
	public $celular;


	public function __construct() {

		parent::__construct();
		
		if (isset($_POST['cadastrar'])) {

			$this->receber_posts();

		}

	}


	protected function receber_posts() {

		$this->nome = $_POST['nome'];
		$this->email = $_POST['email'];
		$this->senha = $_POST['senha'];
		$this->senha2 = $_POST['senha2'];
		$this->sexo = $_POST['sexo'];
		$this->data_nascimento = $_POST['ano'] . "-" . $_POST['mes'] . "-" . $_POST['dia'];
		$this->telefone = $_POST['telefone'];
		$this->celular = $_POST['celular'];

	}


	public function cadastrar() {

		if (isset($_POST['cadastrar'])) {

			if ($this->telefone == "") {$this->telefone = "DEFAULT";};
			if ($this->celular == "") {$this->celular = "DEFAULT";};


			// Verificando se as senhas são iguais e executando o cadastro no banco de dados

			if ($this->senha == $this->senha2) {

				$sql_cadastro = "INSERT INTO dados_usuario (Nome, Email, Senha, Sexo, Data_nascimento, Telefone, Celular) values ('$this->nome', '$this->email', '$this->senha', '$this->sexo', '$this->data_nascimento', $this->telefone, $this->celular);";


				if (mysqli_query($this->con, $sql_cadastro)) {

					$_SESSION['nome'] = $this->nome;
					$_SESSION['email'] = $this->email;

				}

			} else {

				echo "As senhas estão diferentes";

			}

		}
	}

}









?>