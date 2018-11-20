<?php
    include "connection.php";

    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    } 

    $id = $_GET['id'];

    $sql = "DELETE FROM requisito WHERE id = $id";
    
    if ($conexao->query($sql) === TRUE) {
        //Cadastrou com sucesso, levar pra tela de listagem
        header("Location: http://localhost/GerenciadorRequisitos/listagemRequisitos.php");
    } else {
        //Mensagem de erro do sql
        echo "Error: " . $sql . "<br>" . $conexao->error;
    }
  
    $conexao -> close();
?>