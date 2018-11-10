<?php
session_start();
if( isset($_SESSION["nome"]) || isset($_GET["p"])){
    $id = $_GET["p"];
    $id_usuario = $_SESSION["id_usuario"];
    include "includes/conexao.php";
    $conexao = conexao();

    $sql = "INSERT INTO carrinho (usuario, produto) VALUES ($id_usuario, $id)";
    mysqli_query($conexao, $sql);
    header("location:home.php");
}else{
    header("location:index.php");
}
?>