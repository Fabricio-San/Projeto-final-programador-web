<?php
session_start();

include 'dbh.inc.php';
 
// resgata variáveis do formulário
$uid = isset($_POST['uid']) ? $_POST['uid'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
 
if (empty($uid) || empty($password))
{
    echo "Informe email e senha";
    exit;
}
 

 
$conn = getConnection();
 
$sql = "SELECT * FROM users WHERE user_uid='$uid'";
$stmt = $conn->prepare($sql);
 
$stmt->bindParam(':uid', $uid);
$stmt->bindParam(':password', $password);
 
if ($stmt->execute())
{
    header('Location: ../tarefas.php');
    exit();
}
 
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
if (count($users) <= 0)
{
    echo "Email ou senha incorretos";
    exit;
}
 
//pega o primeiro usuário
$user = $users[0];
 
session_start();
$_SESSION['logged_in'] = true;
$_SESSION['uid'] = $uid['uid'];
$_SESSION['password'] = $password['password'];

 
header('Location: ../index.php');