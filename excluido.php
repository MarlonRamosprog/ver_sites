<!DOCTYPE html>
<html>
<head>
	<title>Minhas Contas nas Redes da Web</title>
	<meta charset="UTF-8">	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>					
	<?php
		$id = $_POST["id"];

		$Servidor = "localhost";
		$usuario = "id3757134_marlon";
		$senha = "desenho4ever";
		$banco = "id3757134_bd_marlon";

		$connect = new mysqli($Servidor, $usuario, $senha, $banco);

		if ($connect->connect_error) {
			die("<p>Erro de conexão!</p>");
		}

		$del = "DELETE FROM sites WHERE ID = '$id'";
		$delete = $connect->query($del);
		echo "<p class='titulo'>Atalho deletado!</p>";

		$connect->close();
	?>
	<div class="titulo"><p>Volte aqui!</p></div>
	<a href="index.php"><button class="botao_acao">Início/Sites</button></a>
	<a href="cadastro.php"><button class="botao_acao">Cadastro</button></a>		
		
</body>
</html>