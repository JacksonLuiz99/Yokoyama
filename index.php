
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Fipe</title>
    <link rel="stylesheet" href="lib/style.css">
</head>
<body>
    <form name="formFip" id="formfip" method="poste" action="controller/controllerFip.php">
        <select name="marca" id="marca" required>
            <option value="">Selecione</option>
        </select>

        <select name="veiculo" id="veiculo" required>
            <option value="">Selecione</option>
        </select>

        <select name="ano" id="ano" required>
            <option value="">Selecione</option>
        </select>
    </form>

    <script src="lib/zepto.min.js"></script>
    <script src="lib/javascript.js"></script>
    </body>
</html>