<?php
include_once ('conexaoBD.php');
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$curso = $_POST['curso'];




$mgs_encomend = "INSERT INTO encomenda(nome,telefone,curso) VALUES ('$nome','$telefone','$curso')";

mysqli_query($conn, $mgs_encomend);

header("Location: index.php");
exit;

?>