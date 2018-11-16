<?php
session_start();
if( isset($_SESSION["nome"])){
    $id_usuario = $_SESSION["id_usuario"];
    include "includes/conexao.php";
    $conexao = conexao();

    $sql = "DELETE FROM carrinho WHERE usuario = $id_usuario";
    mysqli_query($conexao, $sql);
    header("location:home.php");
}else{
    header("location:index.php");
}
?>