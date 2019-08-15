<?php

$db = "mysql:dbname=base;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try
{
    $pdo = new PDO($db, $dbuser, $dbpass);

    $cnx = "Conexão estabelecida com sucesso.";
}
catch (PDOException $e)
{
    $cnx = "Falhou: " . $e->getMessage();
}

?>