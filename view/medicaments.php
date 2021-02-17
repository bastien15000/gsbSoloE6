<!DOCTYPE html>
    <head>
        <title>Consulter</title>
        <link rel="stylesheet" href="/gsbSoloE6/public/css/consulter.css">
        <meta charset="UTF-8">
    </head>
    <body>
    <?php 
    if(isset($_GET['idFamille'])){
        ?><h1 id="liste-medicaments" class="vue-medicaments">Liste des médicaments de la famille <?=$_GET['idFamille']?></h1><?php
    }
    else {
        ?><h1 id="liste-medicaments" class="vue-medicaments">Liste des médicaments</h1><a href="../view/forms/ajoutMedic.php" class="btn">Ajouter</a><?php
    }?> 
        <div class="vue-medicaments">
        <?php
            while($donnees = $lesMedicaments->fetch()) {
                if(isset($_GET['idFamille'])) {
                    $donnees['idFamille'] = $_GET['idFamille'];
                }

                echo '<h3 id="liste-medicaments">' . $donnees['id'] . ' : </h3>
                <a href=?action=getMedicament&amp;idMed='. $donnees['id'] . ' class="btn">Modifier</a>
                <a href=?action=deleteMedicament&amp;idMedSupp='.$donnees['id'].' class="btn">Supprimer</a><p>
                <p>Nom commercial : ' . $donnees['nomCommercial'] . '</p>
                <p> Id Famille : ' . $donnees['idFamille'] . '</p>
                <p>Composition : ' . $donnees['composition'] . '</p>
                <p>Effets : ' . $donnees['effets'] . '</p>
                <p>Contre-Indications : ' . $donnees['contreIndications'] . ' </p>';

            }
        ?>
        </div>
    </body>
</html>