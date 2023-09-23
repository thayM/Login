<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <title>Página de Login</title>
</head>
<body>

<form action="">
    <h2 class="titulo">Login</h2>

    <div class="campos">
    <input required class="input" type="text" id="nome-box">
    <label for=""><i class="bi bi-envelope"></i> Email</label>
    </div>

    <div class="campos">
    <input required class="input" type="text">
    <label for=""><i class="bi bi-key"></i> Senha</label>
    </div>
    
    <p class="links">Esqueci minha senha</p>
    <button class="btns logar">Logar</button>

    <p class="divBtns">ou</p>

    <div class="btnsAlt">
    <button class="btns"><i class="bi bi-google"></i> Google</button>
    <button class="btns"><i class="bi bi-facebook"></i> Facebook</button>
    </div>

    <p class="links">Não tem conta? Clique para se cadastrar</p>
</form>
    
</body>
</html>