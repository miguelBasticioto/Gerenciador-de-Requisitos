<?php
    if(isset($_GET['idRequisito'])){
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
    
        $idBaseline = 0;
        while($row = $result->fetch_assoc()) {
            $idBaseline = $row["id"];
        }


        foreach($ids as $idRequisito){
            //Salvar no baseline_requisito usando id da baseline, e usando o id de cada requisito pra saber as propriedades deles
            $sql = "SELECT * FROM requisito WHERE id = $idRequisito";
            $result = $conexao->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                $criacaoRequisito = $row['criacao'];
                $descricaoRequisito = $row['descricao'];
                $funcionalRequisito = $row['funcional'];
                $idRequisito = $row['id'];
                $nomeRequisito = $row['nome'];

                $sql = "INSERT INTO baseline_requisito (criacao_requisito, descricao_requisito, funcional_requisito, id_autor, id_baseline, nome_requisito) VALUES ('$criacaoRequisito', '$descricaoRequisito', '$funcionalRequisito', '$autor', '$idBaseline', '$nomeRequisito')";
                $result = $conexao->query($sql);
                
            }
        }

        header("Location: http://localhost/GerenciadorRequisitos/listagemBaselines.php");
        
        $conexao -> close();

    } else{
        echo "false";
    }
?>