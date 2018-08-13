<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Minhas Contas nas Redes da Web</title>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>	
	<?php
		//conexão
		include("conn.php");

		$palavra_chave = $_POST['palavra_chave'];
	?>
	
	<header>
		<?php include("cabecalho.php"); ?>
		
		<br />

		<div class="margin_pesquisa">
			<form action="" method="post">
			  	<div class="form-group">
				    <input type="text" name="palavra_chave" placeholder="Digite aqui sua palavra-chave" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $palavra_chave ?>">
				    <input type="submit" name="pesquisar" value="Pesquisar" type="button" class="btn btn-success">
			  	</div>
		  	</form>
		</div>
		  
	</header>

	<div class="container2">
		<?php
		$busca = "%{$palavra_chave}%";//variável para substituir palavra_chave no prepared statement
		$stmt = $conn->prepare("SELECT * FROM sites WHERE site LIKE ?");//prepara busca
		$stmt->bind_param("s", $busca);//vincula as variáveis
		$stmt->execute();//executa o prepared statement
		$result = $stmt->get_result();//executa a consulta
		if ( $result->num_rows === 0) exit("<h4 class='text-center'>Não foi encontrado nenhum resultado.</4>");//caso não haja resultado
		while ($row = $result->fetch_assoc()) {
			echo "	<div class='celula'>
						<a href='" . $row['endereco'] ."'><h4>" . $row['id'] . " - " . $row['site'] . "</h4></a>

						<br />

						<div class='botoes'>
							<a href='" . $row['endereco'] ."' target=_blank><button class='btn btn-success'>Ir!</button></a>
							<form action='excluir.php' method='post'>
							    <input type='hidden' name='id' value='" . $row['id'] ."'>
							    <input type='hidden' name='site' value='" . $row['site'] ."'>
							    <input type='submit' name='deletar' value='deletar' class='btn btn-danger'/>
							</form>
						</div>							
					</div>";	
		}
		$stmt->close();
		$conn->close();
		?>		
	</div>

	<footer>
		<?php include("rodape.php"); ?>
	</footer>
		
</body>
</html>