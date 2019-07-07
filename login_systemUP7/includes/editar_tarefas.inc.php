<?php
include 'header.php';
include 'includes/taskdb.inc.php';


    
    $sql = "update tarefas set concluido = :concluido where id = :id";
    $pdo = getConnection();

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':concluido','S');
     $stmt->bindParam(':id',$_GET['id']);
    $stmt->execute();

    header("location: tarefas.php");

