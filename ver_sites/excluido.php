<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<title>Minhas Contas nas Redes da Web</title>
	<meta charset="UTF-8">	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>					
	<?php
	    $id = $_POST["id"];
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];

		//segurança do cadastro
		require_once("seg_excluido.php");

		/*function expulsaVisitante() {			
			echo "
				<script>
					alert('Usuário ou senha inválidos!');
					location.href='index.php';
				</script>";
		}*/

		function excluir(){ 
		    global $id;

			//conexão
		    include("conn.php");

			$connect = new mysqli($Servidor, $usuario, $senha, $banco);

			if ($connect->connect_error) {
				die("<p>Erro de conexão!</p>");
			}

			$del = "DELETE FROM sites WHERE id = '$id'";
			$delete = $connect->query($del);

			$connect->close();	
			
			echo "
			<script language='javascript'>
			    window.location='index.php';
			    alert('Atalho deletado!');
			</script>";
		}

		/*if ($usuario == 'marlon' && $senha == 'barbarasaramos') {
			excluir();
		} else {			
			expulsaVisitante();
		}*/		
	
	?>
		
		
</body>
</html>