<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css_e_js/modelo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<?php require_once "includes/navbar.php"; ?>

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

	<?php require_once "includes/footer.php"; ?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>