<?php
function conexao(){
    $host = "localhost";
    $user = "root";
    $passwd = "root";
    $db = "guilherme_bd";
    $conexao = mysqli_connect($host, $user, $passwd, $db);
    mysqli_set_charset($conexao, "UTF-8");
    return $conexao;
}
?>
