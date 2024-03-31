<?php

$_SERVER = "localhost";
$user = "root";
$password = ""; /*Mudar senha do sql conforme a nescessidade*/
$db_name = "poupebemsite";


//criando a conexão

$conn = mysqli_connect($_SERVER, $user, $password, $db_name);


?>