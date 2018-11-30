<?php
session_start();

// if(!isset($_SESSION["email"])){
//   // header("Location:home.php");
// }
?>
<!DOCTYPE html!>
<!-- Guilherme Alves -->
<html lang="pt-br">
<head>
	<title>Pizzaon</title>
	<link rel='shortcut icon' type="img/x-icon" href="img/pizza.png">
	<meta charset="utf-8"/>
	<meta name="author" content="Guilherme Alves"/>
	<meta name="description" content="Descrição"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body style="background-image:url('img/3.jpg');background-attachment:fixed;background-size:cover;background-position:center">

		<?php
			include "includes/menu_log.php"
			?>

		<div class="container-fluid centro">
			<form method="post" class="form-horizontaL col-lg-6 col-lg-offset-3">
				<fieldset><br><br><br>
					<h3 style="color:rgb(255, 255, 255)">DEIXE SUA OPINIÃO SOBRE O SITE</h3>
					<div class="form-group">
  			    <label style="color:rgb(58, 254, 0)" class="control-label col-sm-2" for="nome">Nome:</label>
  			    <div class="col-sm-10">
  			      <input type="text" class="form-control" name="nome" id="nome" placeholder="Guilherme">
  			    </div>
  			  </div>
			    <div class="form-group">
			    <label style="color:rgb(58, 254, 0)" class="control-label col-sm-2" for="email">Email:</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" name="email-l" id="email" placeholder="maria@gmail.com">
			    </div>
			  </div>
				<div class="form-group">
					<label style="color:rgb(58, 254, 0)" class="control-label col-sm-2" for="email">Deixe sua opinião aqui embaixo:</label>
					<div class="col-sm-10">
				<textarea id="msg" class="textarea form-control" placeholder="Digite aqui!!!" rows="10" cols="60"></textarea>
				</div></div>
			    <div class="col-sm-offset-2 col-sm-10"><br>
						<button type="submit" class="btn btn-success">Enviar<script>alert('Sua opinião foi enviada com sucesso!!!')</script></button>
			    </div>
			  </div>
			</fieldset><br>

			</form>
		</div>
		<div class="row">
		<a href="#" onclick="alert('Sua opinião foi enviada com sucesso!!!');window.location.href='apagar_td.php'"></a>
		</div>

			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<!-- Include all compiled plugins (below), or include individual files as needed -->
				<script src="js/bootstrap.min.js"></script>
	</body>
	</html>
