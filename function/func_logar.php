<?php

require_once('../assets/lib/conn.php');
extract($_POST);

$errors = [];



$sqlSelect = "SELECT * FROM usuario WHERE email = :email and senha = :senha";
$stmt = $conn->prepare($sqlSelect);
$stmt->bindValue(":email", $email);
$stmt->bindValue(":senha", $senha);
$stmt->execute();


if($stmt->rowCount() === 1){
    $user = $stmt->fetch(PDO::FETCH_OBJ);
    session_start();
    $_SESSION['loggIn'] = true;
    header('Location: ../appUser/index.php');
}else{
    $errors['senha'] = "Email ou senha inválidos*";
    foreach($_POST as $indice => $valor){
        $valores = strip_tags($valor);
        if(empty($valor) || empty($valores)){
        $errors[$indice] = "O campo ".$indice." é obrigatório*";
        }
    }
    session_start();
    $_SESSION['errors'] = $errors; 
    header('Location: ../index.php');
}


?>