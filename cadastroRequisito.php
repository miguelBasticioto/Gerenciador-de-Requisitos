<html>
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:black">
                <a class="navbar-brand" href="#">Requisitos</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Baselines</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </nav>

    <form style = "text-align: center" name = "formRequisito" method = "post" action = "criarRequisito.php">
        <table align = "center">
            <tr>
                <td>Nome:</td>
                <td><input type="text" class="form-control" name="nome" placeholder = "Nome do requisito"></td>
            </tr>
            <tr>
                <td valign = "top">Descrição:</td><br/>
                <td><textarea class="form-control" rows="20" cols = "100" name = "descricao"></textarea></td>
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
       
        <button type="submit" class="btn btn-primary mb-2">Criar</button>
    </form>
</body>
</html>

