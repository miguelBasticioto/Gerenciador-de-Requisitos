<?php
    include "connection.php";

    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    } 

    $id = $_GET['id'];

    $sql = "SELECT * FROM requisito WHERE id = $id";
    $result = $conexao->query($sql);
    
?>

<html>
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Editar Requisito</title>
</head>
<body>
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">

     bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });

  </script>
						
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

    <script>
        function confirmacao(){
            if(confirm("Você deseja deletar o requisito?")) {
                window.location = "deletarRequisito.php?id=<?php echo $id;?>";
            } else {

            }
        }
    </script>
</head>
    <body>
        <ul>
        <li><a href="listagemRequisitos.php">Requisitos</a></li>
        <li><a href="#baselines">Baselines</a></li>
        </ul>

        <h2 align = "center">Nome do projeto</h2>
        
        <center>Criado por: Nome do usuário</center>

        <?php 
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { 
            ?>
        <form style = "text-align: center" name = "formRequisito" method = "post" action = "salvarRequisito.php?id=<?php echo $id?>">
            <table align = "center">
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" class="form-control" name="nome" value = "<?php echo $row["nome"];?>" required></td>
                </tr>
                <tr>
                    <td valign = "top">Descrição:</td><br/>
                    <td><textarea class="form-control" rows="20" cols = "100" name = "descricao"><?php echo $row["descricao"];?></textarea></td>
                </tr>
                <tr>
                    <td>Tipo: </td>
                    <td>
                    <?php
                    if($row["funcional"] == 1) { 
                        ?>
                        <select name = "funcional">
                            <option value="on">Funcional</option>
                            <option value="off">Não funcional</option>
                        </select>
                    <?php 
                        } else {
                            ?>
                            <select name = "funcional">
                                <option value="off">Não funcional</option>
                                <option value="on">Funcional</option>
                            </select>
                            <?php
                        }
                    ?>
                    </td>
                </tr>
            </table>    
            <br/>
            <button type="submit" class="btn btn-primary mb-2" onclick = "nicEditors.findEditor('descricao').saveContent()";>Confirmar<br/>edição</button>
        </form>
        <?php
            }
        } else {
            echo "0 results";
        }
        ?>
        <button type="submit" class="btn btn-primary mb-2" style = "background-color: #ea5e48; border: 1px solid #ff5e48" onclick = "confirmacao()";>Deletar</button>
    </body>
</html>

<?php
    $conexao -> close();
?>
