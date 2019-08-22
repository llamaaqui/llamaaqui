<?php

require_once "backend/cadastro_backend.php";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css_e_js/cadastro.css">
	<link rel="stylesheet" type="text/css" href="css_e_js/padrao.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<?php require_once "includes/navbar.php"; ?>


	<div class="formulario_cadastro">
		<form class="form-group" method="post">

			<h1 id="titulo_cadastro">Criar uma conta</h1>
			
			<input class="input_form" type="text" name="nome" id="nome" required="" placeholder="Nome" value="<?=$nome?>">

			<br><br>

			<input class="input_form" type="email" name="email" id="email" required="" placeholder="E-mail" value="<?=$email?>">

			<br><br>

			<input class="input_form" type="password" name="senha" id="senha" required="" placeholder="Senha" value="<?=$senha?>">

			<br><br>

			<input class="input_form" type="password" name="senha2" id="senha2" required="" placeholder="Repetir a senha">

			<br><br>

			<p class="p_cadastro">Sexo</p>	

			<div style="text-align: center">
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="masculino" name="sexo" class="custom-control-input" value="Masculino" required="" <?php if ($_POST['sexo'] == "Masculino" and isset($_POST['sexo'])) {echo "checked=''";}?>>
					<label class="custom-control-label" for="masculino">Masculino</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="feminino" name="sexo" class="custom-control-input" value="Feminino" <?php if ($_POST['sexo'] == "Feminino" and isset($_POST['sexo'])) {echo "checked=''";}?>>
					<label class="custom-control-label" for="feminino">Feminino</label>
				</div>
			</div>

			<br>


			<select name="dia" class="select" required="">

				<option><?php if (isset($_POST['dia'])) { echo $_POST['dia'];} else { echo 'Dia';}?></option>

				<?php for ($i = 1; $i <= 31; $i++) {?>
				<option><?=$i?></option>
				<?php } ?>

			</select>


			<select name="mes" class="select" required="">
				<option><?php if (isset($_POST['mes'])) { echo $_POST['mes'];} else { echo 'Mês';}?></option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
			</select>


			<select name="ano" class="select" required="">

				<option><?php if (isset($_POST['ano'])) { echo $_POST['ano'];} else { echo 'Ano';}?></option>
				<?php for ($i = date('Y'); $i >= (date('Y') - 100); $i--) {?>
				<option><?=$i?></option>
				<?php } ?>

			</select>

			<br><br>

			<input class="input_form" type="number" name="telefone" id="telefone" placeholder="Número de Telefone" value="<?=$telefone?>">

			<br><br>

			<input class="input_form" type="number" name="celular" id="celular" placeholder="Número de Celular" value="<?=$celular?>">


			<button class="btn btn-success btn-block mt-5" name="cadastrar" type="submit">Enviar</button>

		</form>
	</div>

	<?php require_once "includes/footer.php"; ?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>