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


	<div class="formulario_cadastro">
		<form class="form-group" method="post">

			<h1 id="titulo_cadastro">Criar uma conta</h1>
			
			<input class="input_form" type="text" name="nome" id="nome" required="" placeholder="Nome">

			<br><br>

			<input class="input_form" type="email" name="email" id="email" required="" placeholder="E-mail">

			<br><br>

			<input class="input_form" type="password" name="senha" id="senha" required="" placeholder="Senha">

			<br><br>

			<input class="input_form" type="password" name="senha2" id="senha2" required="" placeholder="Repetir a senha">

			<br><br>

			<p class="p_cadastro">Sexo</p>	

			<div style="text-align: center">
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="masculino" name="sexo" class="custom-control-input" required="">
					<label class="custom-control-label" for="masculino">Masculino</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="feminino" name="sexo" class="custom-control-input">
					<label class="custom-control-label" for="feminino">Feminino</label>
				</div>
			</div>

			<br>


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

			<input class="input_form" type="number" name="telefone" id="telefone" placeholder="Número de Telefone">

			<br><br>

			<input class="input_form" type="number" name="celular" id="celular" placeholder="Número de celular">


			<button class="btn btn-success btn-block mt-5" type="submit">Enviar</button>

		</form>
	</div>

	<?php require_once "includes/footer.php"; ?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>