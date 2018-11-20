<?php
    include "connection.php";

    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    } 

    $autor = 1;

    $sql = "SELECT * FROM requisito WHERE id_autor = $autor";
    $result = $conexao->query($sql);

    
?>
<html>
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Listagem de Requisitos</title>

    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #0061b7;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <ul>
    <li><a href="listagemRequisitos.php">Requisitos</a></li>
    <li><a href="#baselines">Baselines</a></li>
    </ul>

    <h2 style = "height: 100px; text-align: center">Nome do projeto</h2>

    <div style = "width: 50%; margin: 0 auto">
        <table class = "w3-table w3" style = "background-color: #fafafa; border: 1px solid #999999" align = "center">
            <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) { 
                        ?>
                        <tr style = "border-bottom : 1px solid #999999">
                            <td><?php echo $row["id"];?></td>
                            <td width = "70%"><a href = "editarRequisito.php?id=<?php echo $row["id"];?>"><?php echo $row["nome"];?></a></td>
                            <td style = "text-align: right"><?php echo $row["criacao"];?></td>
                        </tr>
                    <?php 
                    }
                } else {
                    echo "0 results";
                }
            ?>
        </table>
        <br/>
        <button type="submit" class="btn btn-primary mb-2" onclick = "location.href = 'cadastroRequisito.php';">Criar<br/>Requisito</button>
        <button type="submit" class="btn btn-primary mb-2" onclick = "location.href = '';" style = "float: right">Criar<br/>Baseline</button>
     </div>

</body>
</html>
<?php
$conexao -> close();
?>

