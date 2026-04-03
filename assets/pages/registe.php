<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="/assets/css/imports.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registro-php</title>
</head>
<body>
    <div class="container">

        <form action="Registro.php" method="post" class="form-login">
            <h2>Registro PHP</h2>

            <div class="input">
                <label><i class="fa-regular fa-user"></i>Nome</label>
                <input type="text" name="nome" id="" placeholder="Nome Completo" required>
            </div>

            <div class="input">
                <label><i class="fa-regular fa-user"></i>Email</label>
                <input type="email" name="email" id="" placeholder="E-mail" required>
            </div>

            <div class="input">
                <label><i class="fa-solid fa-lock"></i>Senha</label>
                <input type="password" name="senha" id="" placeholder="Senha" required>

                <span onclick="login()" class="spanlogin">Login</span>
            </div>

            <button type="submit" name="submit" class="btn-enviar">Enviar</button>

        </form>

        <div class="login-img">
            <img src="../img/authentication-74.png" alt="Imagem de Login">
        </div>
    </div>

    <script src="../js/login.js"></script>
</body>
</html>