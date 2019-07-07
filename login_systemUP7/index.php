<?php
  include_once 'header.php'
?>
    <section class="main-container">
        <div class="main-wrapper">
           <?php
              if(isset($_SESSION['uid'])){
                echo '<p> Você está logado.</p>';
              } 
            ?>
            
           <h2>Pomodoro</h2>
           <img class="pomodoro" src="img/produtividade.png" alt="">
           <br>
           <h2 class="dicastitle">Dicas</h2> <br>
           <p class="dicastitle">Sabemos que no dia a dia é dificil manter tudo na nossa cabeça, responsabilidades, favores, trabalho, etc.,
            e além de tudo sabemos o quão facil é se distrair, principalmente se você usa o computador para trabalhar, aqui vai umas dicas:</p><br>
            <div class="dicas">
              <div class="dicas"><p>1. Escreva seu objetivo <br> Evite ser vago com seus objetivos - Exemplo: <br> Vou estudar estudar Fisica, vou perder peso, vou ler livros, etc. 
              Uma das razões ao qual nós a maioria das pessoas não conseguem atingir sua meta é simplesmente por <br> ser muito vago na hora de definir seus objetivos.
              Exemplo de como ser especifico com seus objetivos: Vou ler 10 páginas de livro X, vou me exercitar por 1h <br> todos dias depois ou antes do trabalho.</p></div><br>

              <div class="dicas"><p>2. Foque no seu principal resultado <br> Com frequência a razão de algo "sempre estar na sua cabeça" é porque você quer que seja diferente do que altualmente é e mesmo assim:
              <br> -Você ainda não especificou exatamente seu resultado intencional. <br> -Você ainda não decidiu qual a primeira ação fisica será. <br> -Você não colocou lembretes do resultado e <br>
              a ação requirida no sistema que você confia.  </p></div><br>

              <div class="dicas"><p>3. Lista de Tarefas <br> Temos uma lista de tarefas online para você tirar seus objetivos, responsabilidades da sua mente. <br>
              Cadastre e logue usando sua conta e você será redirecionado para sua lista de tarefas online.</p></div>
            </div>

        </div>
    </section>
<?php
  include_once 'footer.php'
?>
</body>
</html>