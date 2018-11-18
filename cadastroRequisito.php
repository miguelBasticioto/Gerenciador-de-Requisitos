<html>
<head>
    <title>Cadastrar requisito</title>
</head>
<body>
    <form name = "formRequisito" method = "post" action = "criarRequisito.php">
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type = "text" name = "nome"/><br/></td>
            </tr>
            <tr>
                <td>Descrição:</td>
                <td><textarea name = "descricao"></textarea><br/><br/></td>
            </tr>
            <tr>
                <td>Funcional:</td>
                <td><input type = "checkbox" name = "funcional"/><br/><br/></td>
            </tr>
            <tr>
                <td><input type = "submit" value = "Enviar"/></td>
            </tr>
        </table>
    </form>
</body>
</html>

