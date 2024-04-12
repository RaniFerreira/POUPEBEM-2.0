<?php
    include_once('conexaoBD.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $mensagem = $_POST['mensagem'];
    
    


    $mgs_formulario = "INSERT INTO formularioduvida(nome,email,telefone,genero,mensagem) VALUES ('$nome','$email','$telefone','$genero','$mensagem')";

    mysqli_query($conn,$mgs_formulario);

    header("Location: index.php");
        exit;

?>