<?php
session_start();
$errors = $_SESSION['errors'] ?? null;
unset($_SESSION['errors']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="assets/css/style_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <title>Página de Login</title>
</head>
<body>

<div class="formulario">
<form action="function/func_logar.php" method="POST">
    <h2 class="titulo">Login</h2>

    <div class="campos">
    <input required class="input" name="email" id="nome-box" type="text">
    <label class="labelCampos" for="">
        <i class="bi bi-envelope-fill"></i>
        <p  class="plabel">Email</p>
    </label>
    </div>
    <span class="error"><?= (isset($errors['email'])) ? $errors["email"] : null ?></span>

    <div class="campos">
    <input required class="input" name="senha" id="senha" type="password">
    <label class="labelCampos" for="">
        <i class="bi bi-key-fill"></i>
        <p class="plabel">Senha</p>
    </label>
    <i class="bi bi-eye-fill" id="btnSenha" onclick="exibirSenha()"></i>
    </div>
    <span class="error"><?= (isset($errors['senha'])) ? $errors["senha"] : null ?></span>
    
    <p class="pSenha">Esqueci minha senha</p>
    <div class="logar">
    <button class="btns">Logar</button>
    </div>

    <p class="divBtns">ou</p>

    <div class="btnsAlt">
    <button class="btns"><i class="bi bi-google"></i> Google</button>
    <button class="btns"><i class="bi bi-facebook"></i> Facebook</button>
    </div>

    <p class="pConta">Não tem conta? Clique para se cadastrar</p>
</form>
</div>
<script src="assets/js/main.js"></script>
</body>
</html>

<!-- <i class="bi bi-envelope"></i>
<i class="bi bi-key"></i>      -->