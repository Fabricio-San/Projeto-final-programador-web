<?php 

function getConnection(){

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";


try
{
    $dsn = "mysql:host=$dbServername;port=3306;dbname=$dbName";

    $pdo = new PDO($dsn,$dbUsername, $dbPassword);
    
    return $pdo;

}  catch ( PDOException $e ){

    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}

}



