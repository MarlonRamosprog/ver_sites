<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style_cadastro.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Excluir</title>
</head>
<body>
	<?php 
		$id = $_POST['id'];
		$site = $_POST['site'];
	?>
	<h1>Excluir <?php echo $site; ?>: faça seu login</h1>
	<div class="menu">
		<form method="post" action="excluido.php">
	  		<label>Usuário</label>
	  		<input type="text" name="usuario" value="" maxlength="50" />

	  		<br />
	  
	  		<label>Senha</label>
	  		<input type="password" name="senha" value="" maxlength="50" />
	  		<input type='hidden' name='id' value="<?php echo $id; ?>">
	  
	  		<input type="submit" value="Entrar" />
		</form>
	</div>

</body>
</html>