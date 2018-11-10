<?php
session_start();
unset($_SESSION["nome"]);
unset($_SESSION["id_usuario"]);
header("location:index.php");
?>
