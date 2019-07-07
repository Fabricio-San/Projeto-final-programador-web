<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <nav>
           <div class="main-wrapper">
              <ul>
                 <li><a href="index.php">Inicio</a></li>
              </ul>
              <div class="nav-login">
                  <form action="includes/login.inc.php" method="POST">
                    <input type="text" name="uid" placeholder="Usuário/E-mail">
                    <input type="password" name="password" placeholder="Senha">
                    <button type="submit" name="submit">Login</button>
                  </form>
                  <a href="signup.php">Cadastrar</a>
              </div>
           </div>
        </nav>
    </header>