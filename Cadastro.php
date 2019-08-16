<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="modelo.css">
</head>
<body>

<div id="formulario_cadastro">
	<form method="post">

		<label for="nome">Nome Completo</label><br>
		<input class="input_form" type="text" name="nome" id="nome" required="">

		<br><br>

		<label for="email">E-mail</label><br>
		<input class="input_form" type="email" name="email" id="email" required="">

		<br><br>

		<label for="senha">Senha</label><br>
		<input class="input_form" type="password" name="senha" id="senha" required="">

		<br><br>

		<label for="senha2">Repita a senha</label><br>
		<input class="input_form" type="password" name="senha2" id="senha2" required="">

		<br><br>

		<input class="input_radio" type="radio" name="sexo" id="masculino" required="">
		<label for="masculino">Masculino</label><br>

		<input class="input_radio" type="radio" name="sexo" id="feminino">
		<label for="feminino">Feminino</label>

		<br><br>

		<label for="data_nascimento">Data de Nascimento</label><br>
		<select class="select" required="">

			<option>Dia</option>
			<?php for ($i = 1; $i <= 31; $i++) {?>
			<option><?=$i?></option>
			<?php } ?>

		</select>


		<select class="select" required="">
			<option>Mês</option>
			<option>Janeiro</option>
			<option>Fevereiro</option>
			<option>Março</option>
			<option>Abril</option>
			<option>Maio</option>
			<option>Junho</option>
			<option>Julho</option>
			<option>Agosto</option>
			<option>Setembro</option>
			<option>Outubro</option>
			<option>Novembro</option>
			<option>Dezembro</option>
		</select>


		<select class="select" required="">

			<option>Ano</option>
			<?php for ($i = date('Y'); $i >= (date('Y') - 100); $i--) {?>
			<option><?=$i?></option>
			<?php } ?>

		</select>

		<br><br>

		<label>Número de Telefone</label><br>
		<input class="input_form" type="number" name="telefone" id="telefone" placeholder="Ex: 00 9 0000 0000">

		<br><br>

		<label>Número de celular</label><br>
		<input class="input_form" type="number" name="celular" id="celular" placeholder="Ex: 00 9 0000 0000">

	</form>
</div>

</body>
</html>