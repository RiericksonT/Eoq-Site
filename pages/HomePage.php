<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="../style/HomePage.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@600&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E o Que?</title>
   </head>

  <body>
    <div class="HomePageMain">
      <div id="header"> 
        <?php require '../components/Header.php';?>
      </div>
      <div class="HomeMenu"> 
        <button class="btn btn1" onclick="location.href='HomePage.php'">
          <span style="padding-right:3px; padding-top: 8px; display:inline-block;">
            <img class="manImg" src="../assets/images/home.png" alt="Pagina inicial"></img>
          </span> 
        </button>
        <button class="btn btn2" onclick="location.href='Profile.php'">
        <span style="padding-right:3px; padding-top: 8px; display:inline-block;">
            <img class="profImage" src="../assets/images/profile.png" alt="Perfil"></img>
          </span>  
        </button>
        <button class="btn btn3" onclick="location.href='Settings.php'">
        <span style="padding-right:3px; padding-top: 8px; display:inline-block;">
            <img class="setImg" src="../assets/images/settings.png" alt="Configuracoes"></img> 
          </span>  
        </button>
      </div>
      <div class="HomeQuestions">
        <div class="yourAsk">
          <input type="text" name="Ask" id="Ask" placeholder="Qual sua pergunta?">
          <button class="sendAsk"> Perguntar </button>
        </div>
        <div class="anotherAsks">
          <div class="askText">
            <p>xxxxxxxxxxxxxxxxxxxx</p>
          </div>
          <a href="askPage.php">1 <img src="../assets/images/askBallon.png" alt=""></a>
          <button class="sendReply" onclick="location.href='askPage.php'">Responder</button>
        </div>
      </div>
      <div class="HomeBoard">
        <input type="text" name="search" id="search" placeholder="Procure uma pergunta?">
        <button class="srcButton"><img src="../assets/images/lupa.png" alt=""></button>
      </div>
      <div id="footer">
        <?php require '../components/Footer.php';?>
      </div>
  </body>
</html>
