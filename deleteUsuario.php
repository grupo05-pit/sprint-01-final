<!-- SCRIPT PARA DELETAR O USUÁRIO NO BANCO-->

<?php

if (!empty($_GET['id'])) 
{    
    include_once('salvar.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

    $result = $conexao->query($sqlSelect);
     
    if($result->num_rows > 0)
    {
      $sqlDelete = "DELETE FROM usuarios WHERE id=$id"; 
      $resultDelete = $conexao->query($sqlDelete);
    }
  }
  header('Location: sistema.php');

?>