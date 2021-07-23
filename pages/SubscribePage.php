<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="../style/subscribepage.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@600&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E o Que?</title>
   </head>

  <body>
    <div class="SubscribeMain">
      <div id="header"> 
        <?php require '../components/Header.php';?>
      </div>
      <div class="SubscribeBodyLeft">
        <p>Voce esta quase la!</p>
        <hr/>
        <p class="SubscribeGoogle">Faca seu signin com o google:</p>
        <button><img src="../assets/images/googleLogo.png" alt="login google" id="googleLogo"/></utton>
        <hr />
      </div>
      <div class="divisor"></div>
      <div class="SubscribeBodyRight">
        <p>Preencha suas informações:</p>
        <form action="post">
          <input type="text" placeholder="seu nome" name="nome" required/>
          <input type="text" placeholder="seu email" pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" name="email" required/>
          <input type="password" placeholder="sua senha" name="senha" required/>
          <input type="password" placeholder="confirme sua senha" name="confirmSenha" required/>
          <input type="date" name="idade"  required/>
          <button>Inscreva-se</button>
        </form>
      </div>  
    </div>
    <div id="footer">
      <?php require '../components/Footer.php';?>
    </div>
  </body>
</html>
