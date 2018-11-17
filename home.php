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
	<body style="background-image:url('img/3.jpg');background-attachment:fixed;background-size:cover;background-position:center">
		

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
            $ct = 0;
            while($produto = mysqli_fetch_assoc($query)){
                $ct++;
                if($ct%3==0){
                    $row = true;
                    echo "<div class='row'>";
                }else{
                    $row = false;
                }
                echo "<div class='col-lg-3 col-lg-offset-1' style='margin-top:10px;margin-bottom:10px'>
                    <div class='thumbnail'><br>
                    <img src='".$produto["img"]."' style='height:200px;width:100%' class='img-rounded img-responsive'>
                      <div class='caption'>
                      <h3>".$produto["nome"]."</h3>
                      <p>R$ ".$produto["preco"]."</p>
                      <p><a href='adicionar.php?p=".$produto["id_produtos"]."' class='btn btn-success' role='button'>Adicionar</a> 
                     </p>
                      </div>
                    </div>
                    </div>";
                if($row){
                    echo "</div>";
                }
                }
            }
            ?>
            </div>
            <div class="col-lg-2 col-lg-offset-1" style="border-left:1px solid white;background:rgba(0, 0, 0, 0.2)">
            <h3 style="color:white">Carrinho</h3>
            <div class="row">
            <?php            
            $id_usuario = $_SESSION["id_usuario"];
            $sql = "SELECT  * FROM carrinho JOIN produtos ON carrinho.produto = produtos.id_produtos WHERE carrinho.usuario = $id_usuario";
            if($query = mysqli_query($conexao, $sql)){
                $ct = 0;
                $total = 0;
                while($produto = mysqli_fetch_assoc($query)){
                    $ct++;
                    $total+=$produto["preco"];
                    echo "<div class=' col-lg-12' style='margin-top:10px;margin-bottom:10px'>
                    <div class='thumbnail'><br>
                    <img src='".$produto["img"]."' style='height:200px;width:100%' class='img-rounded img-responsive'>
                    <div class='caption'>
                    <h3>".$produto["nome"]."</h3>
                    <p>R$ ".$produto["preco"]."</p>
                    <p><a href='excluir.php?p=".$produto["id_produtos"]."' class='btn btn-danger' role='button'>Remover</a> 
                   </p>
                    </div>
                    </div>
                    </div>";
                }
                if($ct == 0){
                    echo "<p> Você ainda não possui itens no carrinho </p>";
                }
            }
            if($total>0){
                print "<h4><span class='label label-primary'>Total: R$ ".($total+7)."</label></h4>";
            }
            ?>
            </div>
            <div class="row">
            <a href="#" onclick="alert('Compra concluída, entregaremos em breve');window.location.href='apagar_td.php'" class='btn btn-success btn-block'>Finalizar Compra</a>
            <a href="apagar_td.php" class='btn btn-danger btn-block'>Limpar Carrinho</a>
            </div>
            </div>
		</div>

			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<!-- Include all compiled plugins (below), or include individual files as needed -->
				<script src="js/bootstrap.min.js"></script>
	</body>
	</html>
