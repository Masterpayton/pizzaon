<?php
session_start();
if( isset($_SESSION["nome"]) || isset($_GET["p"])){
    $id = $_GET["p"];
    $id_usuario = $_SESSION["id_usuario"];
    include "includes/conexao.php";
    $conexao = conexao();

    $sql = "DELETE FROM carrinho WHERE produto = $id AND usuario = $id_usuario LIMIT 1";
    mysqli_query($conexao, $sql);
    header("location:home.php");
}else{
    header("location:index.php");
}
?>