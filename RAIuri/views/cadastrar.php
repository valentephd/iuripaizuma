<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SVC - Cadastro de Veículo</title>
</head>
<body>
    <h1>SVC - Cadastro de Veículo</h1>
    <form action="../controllers/cadastroController.php" method="post">
        <span>Tipo: </span>
        <select name="tipo">
            <option value="">Selecione um Tipo de Veículo</option>
            <option value="1">Carro</option>
            <option value="2">Ônibus</option>
            <option value="3">Caminhão</option>
        </select>
        <br><br>
        <span>Placa: </span>
        <input type="text" name="placa">
        <br><br>
        <span>Nº Chassi: </span>
        <input type="text" name="numChassi">
        <br><br>
        <span>Cor: </span>
        <input type="text" name="cor">
        <br><br>
        <span>Ano: </span>
        <input type="text" name="ano">
        <br><br>
        <span>Marca: </span>
        <input type="text" name="marca">
        <br><br>
        <span>Modelo</span>
        <input type="text" name="modelo">
        <br><br>
        <span>Peso Máximo: </span>
        <input type="text" name="pesoMaximo">
        <br><br>
        <span>Preço: </span>
        <input type="text" name="preco">
        <br><br>
        <span>Nº Rodas: </span>
        <input type="text" name="numRodas">
        <!-- Específicos -->
        <br><br>
        <span>Quantidade de Passageiros: </span>
        <input type="text" name="qtdPassageiros">
        <br><br>
        <span>Nº Portas: </span>
        <input type="text" name="numPortas">
        <br><br>
        <span>Quantidade de Eixos: </span>
        <input type="text" name="quantidadeEixo">
        <br>
        <br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>