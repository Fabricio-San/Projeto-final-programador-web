<?php
include 'dbh.inc.php';

// pega os dados do formuário
$first = isset($_POST['first']) ? $_POST['first'] : null;
$last = isset($_POST['last']) ? $_POST['last'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$uid = isset($_POST['uid']) ? $_POST['uid'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

 
 
// validação (bem simples, só pra evitar dados vazios)
if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($password))
{
    header('Location: ../signup.php?signup=empty');
    exit();
}

$conn = getConnection();
$sql = "INSERT INTO users(user_first_name,user_last_name, user_email, user_uid, user_password) 
                    VALUES(:first, :last, :email, :uid, :password)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':first', $first);
$stmt->bindParam(':last', $last);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':uid', $uid);
$stmt->bindParam(':password', $password);

if ($stmt->execute())
{
    header('Location: ../signup.php?signup=cadastrado');
    exit();
}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}
 