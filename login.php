<!-- SCRIPT DA CRIAÇÃO DA TELA DE LOGIN -->
<?php 
header("Content-type: text/html; charset=ISO-8859-1");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça Login<br>E entre para o nosso time</h1>
            <img src="imgs/partypros.svg" class="left-login-image" alt="PartyPros Planejamento">
        </div>
        <div class="right-login">
            <h1>PartyPros</h1>
            <div class="card-login">
                <h1>LOGIN</h1>
                <form action="testLogin.php" method="POST">
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <a class="volt" href="./esqueci/EsqueciSenha.php">Esqueci minha senha</a>
                    <input class="inputSubmit" type="submit" name="submit" value="Enviar">
                    <a href="cadastro.php">Ainda não tem conta? Cadastre-se agora mesmo!</a>
                    <a class="volt" href="index.php">Voltar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>