<?php
require_once '../model/acesso.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SVC - Cadastro de Veículo</title>
</head>
<body>
    <h1>SVC - Lista de Veículo</h1>
    <form action=""></form>

    <br><br>
    TESTE
    <br>
    <pre>
    <?php
        $sql = "SELECT * FROM veiculo";
        $stmt = $pdo->query($sql);

        if ($stmt->rowCount() > 0)
        {
            print_r($stmt->fetchAll());
        }
        else
        {
            echo "Não há veículos cadastrados!";
        }
    ?>
    </pre>
</body>
</html>