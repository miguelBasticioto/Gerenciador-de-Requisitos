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
</head>
<body>
    <table class = "w3-table w3" style = "background-color: #fafafa">
        <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { 
                    ?>
                    <tr>
                        <td><?php echo $row["id"];?></td>
                        <td><?php echo $row["nome"];?></td>
                        <td><?php echo $row["criacao"];?></td>
                    </tr>
                <?php 
                }
            } else {
                echo "0 results";
            }
        ?>
    </table>

</body>
</html>
<?php
$conexao -> close();
?>

