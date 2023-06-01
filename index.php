<!-- SCRIPT DA PÃGINA HOME DO SITE -->
<?php
header("Content-type: text/html; charset=ISO-8859-1");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party Pros</title>
    <link rel="stylesheet" href="css/homeee.css">
</head>

<body>

    <div class="header">
        <div>
            <img class="logo" src="imgs/logotop.png">
        </div>
        <div>
            <a class="btnstop" href="suporte.php">Suporte</a>
            <a class="btnstop" href="login.php">Login</a>
            <a class="btnstop" id="btnborder" href="cadastro.php">Cadastre-se</a>
        </div>
    </div>

    <hr id="hrtop">

    <div class="grid-container">
        <div class="grid-item">
            <a href=""><img class="icons" src="imgs/guitar.png">Música</a>
        </div>
        <div class="grid-item">
            <a href=""><img class="icons" src="imgs/plate.png">Buffets</a>
        </div>
        <div class="grid-item">
            <a href=""><img class="icons" src="imgs/rings.png">Casamentos</a>
        </div>
        <div class="grid-item">
            <a href=""><img class="icons" src="imgs/festa.png">Festas</a>
        </div>
        <div class="grid-item">
            <a href=""><img class="icons" src="imgs/locais.png">Locais</a>
        </div>
        <div class="grid-item">
            <a href=""><img class="icons" src="imgs/entr.png">Entretenimento</a>
        </div>
    </div>

    <hr id="hrtop">

    <div class="search">
        <input type="text" placeholder="Buscar..">
    </div>

    <hr id="hrmain">
</body>

</html>