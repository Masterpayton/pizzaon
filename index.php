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
	<body>
		

		<?php
			include "includes/menu.php"
			?>
		
		<div class="container-fluid" style="background-color:rgba(250,250,250,0.2);margin-top:150px">
			<form method="post" class="form-horizontaL col-lg-5">
				<fieldset>
					<h3>LOGIN</h3>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="email">Email:</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" name="email-l" id="email" placeholder="joao@gmail.com">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="pwd">Password:</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" name="senha-l" id="pwd" placeholder="password">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Enviar</button>
			    </div>
			  </div>
			</fieldset><br>
			<?php
		//Cadastro
		include_once("includes/conexao.php");
		$conexao = conexao();
		if ( isset($_POST["email-l"])) {
			$email = $_POST["email-l"];
			$senha = $_POST["senha-l"];
			$senha = md5($senha);
			
			$sql= "select * FROM usuario
			WHERE email = '$email' AND senha = '$senha'";
				if($query = mysqli_query($conexao, $sql)){
					$resultado = mysqli_fetch_assoc($query);

					if(isset($resultado["email"])){
						$_SESSION["nome"] = $resultado["nome"];
						$_SESSION["id_usuario"] = $resultado["id_usuario"];
						header("location:home.php");
					}
					else {
							echo"<span class='alert alert-danger'>Dados incorretos </span>";
					}
				}
			}
			
			?>
			</form>


			<form method="post" class="form-horizo col-lg-6 col-lg-offset-1" style="border-left:solid #ccc 1px">

				<fieldset>
				<h3>CADASTRA-SE</h3>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="nome">Nome:</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="nome-c" id="nome" placeholder="Ronald Oliveira">
			    </div>
			  </div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Email:</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" name="email-c" id="email" placeholder="maria@gmail.com">
					</div>
				</div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="pwd">Password:</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" name="senha-c" id="pwd" placeholder="password">
			    </div>
			  </div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="cep">CEP:</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="cep-c" id="cep">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="endereco">Endereço:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="endereco-c" id="endereco">
					</div>
				</div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10 col-lg-10">
						<button class="btn btn-warning btn-lg btn-block"> Cadastra-se</button>
			    </div>
			  </div>
			</fieldset>
			<br><br>
			<?php
		//Cadastro
		include_once("includes/conexao.php");
		$conexao = conexao();
		if ( isset($_POST["email-c"])) {
			$email = $_POST["email-c"];
			$senha = $_POST["senha-c"];
			$senha = md5($senha);
			$nome = $_POST["nome-c"];
			$cep = $_POST["cep-c"];
			$endereco = $_POST["endereco-c"];
			
			$sql= "select * FROM usuario
			WHERE email = '$email'";
				if($query = mysqli_query($conexao, $sql)){
					$resultado = mysqli_fetch_assoc($query);

					if(isset($resultado["email"])){
						echo"<span class='alert alert-danger'>Esse email já esta sendo utlizado </span>";
					}
					else {
						$sql = "insert INTO  `usuario` (nome, email, senha, cep, endereco) VALUES('$nome', '$email', '$senha', '$cep', '$endereco')";
						if( mysqli_query($conexao,$sql)){
							echo"<span class='alert alert-success'>Cadastro bemm efeituado </span>";
						}else{
							echo"<span class='alert alert-danger'>Erro!!! </span>";
						}
					}
				}
			}
			
			?>
			</form>
		</div>

			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<!-- Include all compiled plugins (below), or include individual files as needed -->
				<script src="js/bootstrap.min.js"></script>
	</body>
	</html>
