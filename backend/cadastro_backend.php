<?php 

error_reporting(0);

require_once "includes/conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha2 = $_POST['senha2'];
$sexo = $_POST['sexo'];
$data_nascimento = $_POST['ano'] . "-" . $_POST['mes'] . "-" . $_POST['dia'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];


// Verificando o click no botão

if (isset($_POST['cadastrar'])) {


	if ($senha == $senha2) {

		$sql_cadastro = "INSERT INTO dados_usuario (Nome, Email, Senha, Sexo, Data_nascimento, Telefone, Celular) values ('$nome', '$email', '$senha', '$sexo', '$data_nascimento', '$telefone', '$celular');";

		if (mysqli_query($con, $sql_cadastro)) {

	// Se funcionar o cadastro

		} else {

	// Se falhar o cadastro

		}

	} else {
		echo "Sua senha está diferente";
	}

}

?>