<?php 


if ( isset ( $_POST['task']) && !empty($_POST['task'])) {

    //die("Tarefa recebida:" . $_POST['task']);

    $sql = "insert into tarefas(task) values (:task)";
    $pdo = getConnection();

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':task',$_POST['task']);

    //if ( ! $stmt->execute() ) {
    //     echo "<script>alert('Erro ao tentar incluir uma nova tarefa.')</script>";
    //}
    $stmt->execute();
}




function getConnection(){

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "todo";


try
{
    $dsn = "mysql:host=$dbServername;port=3306;dbname=$dbName";

    $pdo = new PDO($dsn,$dbUsername, $dbPassword);
    
    return $pdo;

}  catch ( PDOException $e ){

    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}

}

function showTasks(){


    $sql = "select * from tarefas";
    $pdo = getConnection();

    $stmt = $pdo->prepare($sql);
    //$stmt->bindParam(':task',$_POST['task']);

    if ( ! $stmt->execute() ) {
         echo "<script>alert('Erro ao tentar listar tarefa.')</script>";
    } else {
        
        $tasks = [];

        while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {

            $tasks[] = $row;
        }
        return $tasks;
    }    

}
