<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
</head>
<body>

	<div id="formulario">
		<form method="post">

			<label for="nome">Nome Completo</label><br>
			<input type="text" name="nome" id="nome" required="">

			<br><br>

			<label for="email">E-mail</label><br>
			<input type="email" name="email" id="email" required="">

			<br><br>

			<label for="senha">Senha</label><br>
			<input type="password" name="senha" id="senha" required="">

			<br><br>

			<label for="senha2">Repita a senha</label><br>
			<input type="password" name="senha2" id="senha2" required="">

			<br><br>

			<input type="radio" name="sexo" id="masculino" required="">
			<label for="masculino">Masculino</label>
			<input type="radio" name="sexo" id="feminino">
			<label for="feminino">Feminino</label>

			<br><br>

			<label for="data_nascimento">Data de Nascimento</label><br>
			<select class="select">

				<option>Dia</option>
				<?php for ($i = 1; $i <= 31; $i++) {?>
				<option><?=$i?></option>
				<?php } ?>

			</select>


			<select class="select">
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


			<select class="select">

				<option>Ano</option>
				<?php for ($i = date('Y'); $i >= (date('Y') - 100); $i--) {?>
				<option><?=$i?></option>
				<?php } ?>

			</select>

			<br><br>

			<label>Número de Telefone</label><br>
			<input type="number" name="telefone" id="telefone" placeholder="(xx) 9 xxxx-xxxx">

			<br><br>

			<label>Número de celular</label><br>
			<input type="number" name="celular" id="celular" placeholder="(xx) 9 xxxx-xxxx">

		</form>
	</div>

</body>
</html>