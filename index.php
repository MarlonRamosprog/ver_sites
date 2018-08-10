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
	?>
	
	<header>
		<h1>Lista de sites</h1>

		<div class="container2">
			<div class="botao_acao"><a href="login.php">Cadastro</a></div>
			<div class="botao_acao"><a href="login.php">Início</a></div>
		</div>
		
		<br />

		<div class="margin_pesquisa">
		<form action="pesquisa.php" method="post">
			  	<div class="form-group">
				    <input type="text" name="palavra_chave" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite aqui sua palavra-chave">
				    <input type="submit" name="pesquisar" value="Pesquisar" type="button" class="btn btn-success">
			  	</div>
		  	</form>
		  </div>
		  
	</header>

	<?php
		//lista de sites por assunto
		function secao($assunto) {
			global $conn;
 
			echo "
			<section>
				<div class='container2'>
					<h2>" . $assunto . "</h2>
				</div>
	    
				<hr />

				<div class='container2'>
				";



			        $sql = "SELECT * FROM sites WHERE assunto = '$assunto' ORDER BY id DESC";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
				        while($row = $result->fetch_assoc()) {
					        echo "			
					<div class='celula'>
						<a href='" . $row['endereco'] ."'><h3>" . $row['id'] . " - " . $row['site'] . "</h3></a>

						<br />

						<div class='botoes'>
							<div class='botao'>					
								<div class='botao_ir'><a href='" . $row['endereco'] ."' target=_blank>Ir!</a></div>
							</div>
							<div class='botao'>				
								<form action='excluir.php' method='post'>
								    <input type='hidden' name='id' value='" . $row['id'] ."'>
								    <input type='hidden' name='site' value='" . $row['site'] ."'>
								    <input type='submit' name='deletar' value='deletar' class='botao_deletar'/>
								</form>
							</div>
						</div>							
					</div>
							";		        			
					    }
					} else {
					    echo "0 results";
					}
					echo "		
				</div>
			</section>

				<br />";
		}

		secao('Programacao');
		secao('Filosofia');
		secao('Lazer');
		secao('Outros');
	
		echo "				
				<hr />";
		$sql = "SELECT * FROM sites";
		$result = $conn->query($sql);		
		$qtde = mysqli_num_rows($result);
				echo "						
					<p><h4><b>" . $qtde . "</b> atalhos encontrados.</h4><p>";

		$conn->close();
	?>		
	<div class="botao_acao"><a href="login.php">Cadastro</a></div>
		
</body>
</html>