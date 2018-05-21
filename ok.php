<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Realizado com Sucesso!</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		$site = $_POST["site"];
		$endereco = $_POST["endereco"];
		$assunto = $_POST["assunto"];
		
		$Servidor = "localhost";
		$usuario = "id3757134_marlon";
		$senha = "desenho4ever";
		$banco = "id3757134_bd_marlon";
		$conn = new mysqli($servidor, $usuario, $senha, $banco);
		
		if ($conn->connect_error) {
			die("<p>Erro de conexão!</p>");
		}
		
		$sql = "INSERT INTO sites (site, endereco, assunto) VALUES ('$site', '$endereco', '$assunto')";			
		if ($conn->query($sql) === TRUE) {
		    echo "<p class='text-center'>Site cadastrado com Sucesso!</p><br />";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	?>
	<div class="titulo"><p>Volte aqui!</p></div>
	<a href="index.php"><button class="botao_acao">Início/Sites</button></a>
	<a href="cadastro.php"><button class="botao_acao">Cadastro</button></a>					
</body>
</html>
