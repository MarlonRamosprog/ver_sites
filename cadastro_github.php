<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Cadastro de Atalho</title>
</head>
<body>
	<?php
		$validar = false;
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];

		//segurança do cadastro
		function expulsaVisitante() {
			echo "<script>location.href='index.php';</script>";
		}

		if ($usuario == 'xxxxxx' && $senha == 'yyyy') {
			$validar = true;
		} else {
			expulsaVisitante();
		}

		if ($validar == false) {
			expulsaVisitante();
		}
	?>

	<header class="container">
		<h1><b>Cadastro de Atalhos de Sites</b></h1>		
	</header>

	<hr />

	<section class="container">
		<p>Clique aqui para acessar seus atalhos:</p>
		<p><a href="index.php"><button class="botao_acao">Sites</button></a><br /></p>

	</section>

	<hr />

	<section>
		<p>Cadastre seu atalho:</p>

		<form method="POST" action="ok.php">
			<label>Site: <input type="text" name="site" size: "50"></label>
	 		<label>Endereço: <input type="text" name="endereco" size: "200"></label>
			<label>Assunto: 
	    		<select name="assunto" size: "100">
	                <option value="programação">Programação</option>
	                <option value="filosofia">Filosofia</option>
	                <option value="lazer">Lazer</option>
	                <option value="outros">Outros</option>
	            </select>
			</label>
	 		<br />

			<p><input type="submit" name="Cadastrar" value="Cadastrar" class="botao_acao"><input type="reset" name="Limpar" value="Limpar" class="botao_limpar"></p>
		</form>
		

		<hr />			
	</section>
</body>
</html>