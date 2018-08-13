<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Realizado com Sucesso!</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
<?php require("conn.php"); ?>
</head>
<body>
	<?php
		$site = $_POST["site"];
		$endereco = $_POST["endereco"];
		$assunto = $_POST["assunto"];
		
		if ($conn->connect_error) {
			die("<p>Erro de conexão!</p>");
		}/*
		
		$sql = "INSERT INTO sites (site, endereco, assunto) VALUES ('$site', '$endereco', '$assunto')";			
		if ($conn->query($sql) === FALSE) {
		    echo "Houve um problema no servidor!";
		}*/

		/* Prepared statement, stage 1: prepare */
		
		$stmt = $conn->prepare("INSERT INTO sites (site, endereco, assunto) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $site, $endereco, $assunto);
		$stmt->execute();
		$stmt->close();

		$conn->close();
		
		echo "
		<script language='javascript'>
			    window.location='index.php';
			    alert('Site cadastrado com sucesso!');
			</script>";
	?>
					
</body>
</html>
