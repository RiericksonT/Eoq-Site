<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="./style/home.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@600&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <!-- <script src="sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E o Que?</title>
  </head>

  <body>
    <div class="ladoEsquerdo">
      <img src="./assets/images/logo.png" alt="Logo"/>
      <p>Bem Vindo(a) ao “É o que?”!<br/>
      um site feito para você sanar<br/>
        todas as suas duvidas!</p>
      </div>
    <div class="linha-vertical">  </div>
    <div class="ladoDireito">
      <p id="textoBemVindo">Hello, Welcome!</p>
      <form action="">
        <input 
          type="text"
          pattern="[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}"
          autofocus="" 
          required
        /> 
        <p id="textoEmail">email</p>
        <input 
          type="password" 
          required
        /> 
        <p id="textoSenha">senha</p>
        <button type="submit"> Login </button>
      </form>
      <div class="separator">
        <hr class="divisor"/>
        <p>Nao tem login? inscreva-se agora!</p>
      </div>  
      <button onclick="location.href='./pages/subscribepage.php'"> Inscreva-se </button>
    </div>
  </body>
</html>
