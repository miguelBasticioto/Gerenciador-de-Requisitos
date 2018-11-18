<?php
    //Usa a variavel de conexão da classe connection
    include "connection.php";

    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    } 
    
?>
<?php
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $funcional = $_POST["funcional"];
    $autor = 1;

    if($funcional == "on"){
        $funcional = true;
    } else {
        $funcional = false;
    }

    $sql = "INSERT INTO requisito (id_autor, nome, descricao, funcional) VALUES ('$autor', '$nome', '$descricao', '$funcional')";

    if ($conexao->query($sql) === TRUE) {
        //Cadastrou com sucesso, levar pra tela de listagem
        echo "Bem sucedido";
    } else {
        //Mensagem de erro do sql
        echo "Error: " . $sql . "<br>" . $conexao->error;
    }
    
    //Fecha conexão
    $conexao->close();
?>