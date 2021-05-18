<?php
session_start();
?>
<html>
    <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/gsbSoloE6/public/css/menu.css">
    <script src="C:\wamp64\www\gsbSoloE6\public\js\script.js"></script>
    </head>
    <body id="Login">
        <nav class="navbar navbar-expand-lg navbar-light menuBack menuShadow">
            <a class="navbar-brand" href="/gsbSoloE6"><img src="/gsbSoloE6/public/images/logo.png" style="height:70px;"/></a>
            <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
                
            </div>
        </nav>
    <section>
        <div class="bloc_header">
        <h1 class="titre">Connexion</h1>
        
          <form action="login.php" method="POST">
            <label for="username">Nom d'utilisateur : </label>
            <div>
                <input id="username" name="username">
            </div>
            <br>
            <label for="password">Mot de passe : </label>
            <div>
                <input type="password" id="password" name="password">
            </div>
            <br>
            <input type="submit" value="Se connecter">
          </form>
        </div>
    </section>
    <?php
    if(!empty($_SESSION['username'])){
        echo "<p>Vos identifiants sont faux (".$_SESSION['username']."), veuillez réessayer</p>";
        $_SESSION['username'] = null ;
    }
    ?>
    </body>
</html>

<?php include("view/partials/footer.php"); ?>