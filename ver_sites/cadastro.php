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
		require_once("seg_cadastro.php");		
	?>

	<header>
		<div class="container">
			<h1 class="card-title">Cadastro de Atalhos de Sites</h1>	
		</div>	
	</header>

	<section>
		<div class="container">
			<p>Clique aqui para acessar seus atalhos:</p>
			<p><a href="index.php"><button class="botao_acao">Sites</button></a><br /></p>

			<hr />

			<p>Cadastre seu atalho:</p>

			<form method="POST" action="ok.php">
				<div class="form-group"></div>
				<label>Site: <input type="text" name="site" size: "50"></label>
		 		<label>Endereço: <input type="text" name="endereco" size: "200"></label>
				<label>Assunto: 
		    		<select name="assunto" size: "100">
		                <option value="Programacao">Programação</option>
		                <option value="Filosofia">Filosofia</option>
		                <option value="Lazer">Lazer</option>
		                <option value="Outros">Outros</option>
		            </select>
				</label>
		 		<br />

				<p><input type="submit" name="Cadastrar" value="Cadastrar" class="botao_acao"><input type="reset" name="Limpar" value="Limpar" class="botao_limpar"></p>
			</form>

			<div class="row">
				<div class="col-md-4 offset-md-4">
					<form method="post" action="cadastro.php">
				  		<div class="form-group"">
					  		<label for="exampleInputEmail1">Usuário</label>
					  		<input type="text" name="usuario" class="form-control" placeholder="Usuário" value="" maxlength="50" />

					  		<label for="exampleInputEmail1">Senha</label>
					  		<input type="password" name="senha"  class="form-control"value="" maxlength="50"  id="exampleInputPassword1" placeholder="Senha"/>
				  		</div>	  
				  		<input type="submit" value="Entrar" class="btn btn-primary" />
					</form>
				</div>
			</div>		

			<hr />
			
		</div>			
	</section>
</body>
</html>