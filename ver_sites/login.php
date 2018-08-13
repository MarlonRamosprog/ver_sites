<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">	
</head>
<body>
	<div class="container-fluid">
		<h1>Web Developer Login</h1>
		
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
	</div>
</body>
</html>