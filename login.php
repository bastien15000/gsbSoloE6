<?php
session_start();
$_SESSION['username'];
$_SESSION['password'];
if(($_POST['username'] == 'Bastien') && ($_POST['password'] == 'bastien15000')) {
    $_SESSION['erreurConnexion'] = false; ?>
    <?php $title = 'GSB Accueil'; ?>
    <?php include("view/partials/menu.php"); ?>

    <body id="accueil">
    
    <header>
        <div class="bloc_header">
        <h1 class="titre">Bienvenue <?= $_POST['username'];?> ! </h1>
        <h3 class="titre">Galaxy Swiss Bourdin</h3>
        <p>Votre connexion est réussie et vous permet d'avoir accès à toute notre base de données de médicament.</p>
        <p>Nous vous demandons de la manipuler rigoureusement afin de ne pas altérer l'organisation et la productivité de notre société.</p>
        <p>Pour modifier la base de données à votre guise, cliquez sur l'onglet "Familles" ou "Médicaments".</p>
        <p>Nous vous remercions pour votre compréhension.</p>
        </div>
    </header>

    <?php include("view/partials/footer.php");

} else {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    header('Location: /gsbSoloE6/');
}?>