<?php
    if(isset($_GET['idRequisito'])){
        echo "true";
        $ids = $_GET['idRequisito'];

        include "connection.php";

        if ($conexao->connect_error) {
            die("Connection failed: " . $conexao->connect_error);
        } 
    
        $autor = 1;
    
        $sql = "INSERT INTO baseline(criacao) VALUES(now())";
        $result = $conexao->query($sql);
    
        $sql = "SELECT * FROM baseline ORDER BY id DESC LIMIT 1";
        $result = $conexao->query($sql);
    
        while($row = $result->fetch_assoc()) {
            echo $row["id"];
        }
    
        
        foreach($ids as $idRequisito){
            //Salvar no baseline_requisito usando id da baseline, e usando o id de cada requisito pra saber as propriedades deles
            echo $idRequisito;
        }
        
        $conexao -> close();

    } else{
        echo "false";
    }
?>