<!-- SCRIPT DA CRIAÇÃO DO BANCO DE DADOS -->

<?php
    $dbhost = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'cadastro'; //por enquanto sempre criar o banco como "cadastro"!!!

    $conexao = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
    
    // if($conexao->connect_errno){
    //     echo "Erro";
    // } else {
    //     echo "Conectado";
    // }    
?>