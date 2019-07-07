<?php
  include_once 'header.php'
?>
    <section class="main-container">
        <div class="main-wrapper">
           <h2>Cadastrar</h2>
           <form class="signup-form" action="includes/signup.inc.php" method="POST">
               <input type="text" name="first" placeholder="Primeiro Nome">
               <input type="text" name="last" placeholder="Sobrenome">
               <input type="text" name="email" placeholder="E-mail">
               <input type="text" name="uid" placeholder="Usuário">
               <input type="password" name="password" placeholder="Senha">
               <button type="submit" name="submit">Cadastrar</button>      
           </form>
        </div>
    </section>
<?php
  include_once 'footer.php'
?>
</body>
</html>