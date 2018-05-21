<!DOCTYPE html>
<html>
<head>
	<title>Minhas Contas nas Redes da Web</title>
	<meta charset="UTF-8">	
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>	
	<?php
		//conexão
		$Servidor = "localhost";
		$usuario = "id3757134_marlon";
		$senha = "desenho4ever";
		$banco = "id3757134_bd_marlon";

		$connect = new mysqli($Servidor, $usuario, $senha, $banco);

		if ($connect->connect_error) {
			die("<p>Erro de conexão!</p>");
		}
	?>
	
	<header>
		<h1>Lista de sites</h1>

		<a href="cadastro.php"><button class="botao_acao">Cadastro</button></a>
		
		<br />	
	</header>

	<?php
		//lista de sites por assunto
		function secao($assunto) {
			global $connect;
 
			echo "
			<section>
				<div class='container'>
					<h2>" . $assunto . "</h2>
				</div>
	    
				<hr />

				<div class='container'>
				";



			        $sql = "SELECT * FROM sites WHERE assunto = '$assunto' ORDER BY id DESC";
					$result = $connect->query($sql);
					if ($result->num_rows > 0) {
				        while($row = $result->fetch_assoc()) {
					        echo "			
					<div class='celula'>
						<a href='" . $row['endereco'] ."'><h3>" . $row['id'] . " - " . $row['site'] . "</h3></a>

						<br />

						<div class='botoes'>
							<div class='botao'>					
								<a href='" . $row['endereco'] ."' target=_blank><button class='botao_ir'>Ir!</button></a>
							</div>
							<div class='botao'>				
								<form action='excluido.php' method='post'>
								    <input type='hidden' name='id' value=" . $row['id'] .">
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

		secao('Programação');
		secao('Filosofia');
		secao('Lazer');
		secao('Outros');
	
		echo "				
				<hr />";
		$sql = "SELECT * FROM sites";
		$result = $connect->query($sql);		
		$qtde = mysqli_num_rows($result);
				echo "						
					<p><h4><b>" . $qtde . "</b> atalhos encontrados.</h4><p>";

		$connect->close();
	?>		
	<a href="cadastro.php"><button class="botao_acao">Cadastro</button></a>
		
</body>
</html>