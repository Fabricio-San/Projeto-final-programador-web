<?php
include 'includes/taskdb.inc.php';


        $sql = "delete from tarefas where id = :id";
        $pdo = getConnection();
    
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id',$_GET['id']);
        $stmt->execute();
    
        header("location: tarefas.php");