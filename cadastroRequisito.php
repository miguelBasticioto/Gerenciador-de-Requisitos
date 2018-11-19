<html>
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Criar Requisito</title>
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
</head>
    <body>
        <ul>
        <li><a href="listagemRequisitos.php">Requisitos</a></li>
        <li><a href="#baselines">Baselines</a></li>
        </ul>

        <h2 align = "center">Nome do projeto</h2>

        <form style = "text-align: center" name = "formRequisito" method = "post" action = "criarRequisito.php">
            <table align = "center">
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" class="form-control" name="nome" placeholder = "Nome do requisito" required></td>
                </tr>
                <tr>
                    <td valign = "top">Descrição:</td><br/>
                    <td><textarea class="form-control" rows="20" cols = "100" name = "descricao" placeholder = "Descrição do requisito"></textarea></td>
                </tr>
                <tr>
                    <td>Tipo: </td>
                    <td>
                        <select name = "funcional">
                            <option value="on">Funcional</option>
                            <option value="off">Não funcional</option>
                        </select>
                    </td>
                </tr>
            </table>    
        
            <button type="submit" class="btn btn-primary mb-2" onclick = "nicEditors.findEditor('descricao').saveContent()";>Criar</button>
        </form>

    </body>
</html>

