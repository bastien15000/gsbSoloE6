<!DOCTYPE html>
    <head>
        <title>Consulter</title>
        <link rel="stylesheet" href="/gsbSoloE6/public/css/consulter.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="vue-medicaments">
            <div id="bloc-titre"><h1 id="liste-titre" class="liste-medicaments">Liste des familles de médicaments</h1><a href="../view/forms/ajoutFam.php" class="btn" id="crud">Ajouter</a></div>
            <div class="les-familles">
            <?php
            
            while($donnees = $lesfam->fetch())
            {
                echo '<div class="uneFamille"><a class=liste-medicaments href=routeurMedicaments.php?idFamille=' .$donnees['id']. '><h3 id=lien-medic>' . $donnees['id'] . ' : </h3></a>
                      <a href=../view/forms/modifFam.php?idFamModif=' .$donnees['id']. ' class="btn" id=crud>Modifier</a>
                      <a href=?action=deleteFamille&amp;idFamSupp='.$donnees['id'].' class=btn id=crud>Supprimer</a><p>' . $donnees['libelle'] . '</p></div>';
            }
            ?>
            </div>
        </div>
    </body>
</html>