<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/connexion.css">
    <link rel="stylesheet"  href="./css/all.min.css">
</head>
<body>
    <div class="form">
        <div class="prin">
            <div class="logo"><a href="./home.html"><img src="./image/logo.png" alt="logo" width="170"></a></div>
            <div class="log">
            <form action="login.php" method="post" id="form_post">
                <span>connexion</span>
              <?php if(isset($_GET["error"])) { ?> 
                <div class="error">
                    
                    <p><i class="fas fa-exclamation-circle"></i><?php echo $_GET["error"];?></p>
                </div>
          <?php } ?> 
          <div class=tafw>
                <input autocomplete="off" type="email" name="email" id="email" class="email , nn" placeholder="email" >
                <i class="fas fa-check-circle" id="AA"></i>
                <i class="fas fa-exclamation-circle" id="AB"></i></div><br>
                <div class=tafw>
                <input type="password" name="password" id="password" class="password , nn" placeholder="password">
                <i class="fas fa-check-circle" id="BB"></i><i class="fas fa-exclamation-circle" id="BA"></i></div><br>
                <input onclick="submitFomr(event)" type="submit" value="se connecter" name="connecter" id="connecter" class="connecter">
            </form>
            <p>Vous n'avez pas encore de compte ?<a href="./Inscription.html"> Inscrivez-vous</a></p>
        
        </div></div>
        <div class="img"></div>
    </div>
   <script src="./javascript/connexion.js"></script>-->

</body>
</html>