<?php 

if(isset($_POST['submit'])){

    $email = isset($_POST['email']) && !empty($_POST['email']) ? utf8_decode($_POST['email']) : '';
    $senha = isset($_POST['senhas']) && !empty($_POST['senha']) ? utf8_decode($_POST['senha']) : '';

    try {
    $bd = new PDO('mysql:host=localhost;dbname=clientes', $username, $password);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

}



?>