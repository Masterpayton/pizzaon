<?php
session_start();

if(!isset($_SESSION["nome"])){
  header("Location:index.php");
}
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
			include "includes/menu_log.php"
			?>
		
		<div class="container-fluid" style="background-color:rgsba(250,250,250,0.2);margin-top:150px">
        <div class="col-lg-9">
        <?php
        include "includes/conexao.php";
        $conexao = conexao();
        
        $sql = "SELECT  * FROM produtos";
        if($query = mysqli_query($conexao, $sql)){
            while($produto = mysqli_fetch_assoc($query)){
                echo "<div class='col-lg-3 col-lg-offset-1' style='margin-top:10px;margin-bottom:10px'>
                    <div class='thumbnail'><br>
                    <img src='".$produto["img"]."' style='height:200px;width:100%' class='img-rounded img-responsive'>
                      <div class='caption'>
                      <h3>Thumbnail label</h3>
                      <p>...</p>
                      <p><a href='#' class='btn btn-primary' role='button'>Button</a> 
                      <a href='#' class='btn btn-default' role='button'>Button</a></p>
                      </div>
                    </div>
                    </div>";
                }
            }
            ?>
            </div>
            <div class="col-lg-2 col-lg-offset-1" style="border-left:1px solid white;background:rgba(0, 0, 0, 0.2)">
            <h3 style="color:white">Carrinho</h3>
            <div class="row">
            <?php            
            $sql = "SELECT  * FROM produtos";
            if($query = mysqli_query($conexao, $sql)){
                while($produto = mysqli_fetch_assoc($query)){
                    echo "<div class=' col-lg-12' style='background:whiste;margin-top:10px;margin-bottom:10px'>
                    <div class='thumbnail'><br>
                    <img src='".$produto["img"]."' style='height:200px;width:100%' class='img-rounded img-responsive'>
                    <div class='caption'>
                    <h3>Thumbnail label</h3>
                    <p>...</p>
                    <p><a href='#' class='btn btn-primary' role='button'>Button</a> 
                    <a href='#' class='btn btn-default' role='button'>Button</a></p>
                    </div>
                    </div>
                    </div>";
                }
            }
            ?>
            </div>
            <div class="row">
            <a href="" class='btn btn-success btn-block'>Finalizar Compra</a>
            <a href="" class='btn btn-danger btn-block'>Limpar Carrinho</a>
            </div>
            </div>
		</div>

			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<!-- Include all compiled plugins (below), or include individual files as needed -->
				<script src="js/bootstrap.min.js"></script>
	</body>
	</html>
