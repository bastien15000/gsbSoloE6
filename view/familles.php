<!DOCTYPE html>
    <head>
        <title>Consulter</title>
        <link rel="stylesheet" href="/gsbSoloE6/public/css/consulter.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <h1 id="liste-medicaments" class="vue-medicaments">Liste des familles de médicaments</h1><a href="../view/forms/ajoutFam.php" class="btn">Ajouter</a>
        <div class="vue-medicaments">
        <?php
            
            while($donnees = $lesfam->fetch())
            {
                echo '<a id=liste-medicaments href=routeurMedicaments.php?idFamille=' .$donnees['id']. '><h3>' . $donnees['id'] . ' : </h3></a>
                      <a href=../view/forms/modifFam.php?idFamModif=' .$donnees['id']. ' class="btn">Modifier</a>
                      <a href=?action=deleteFamille&amp;idFamSupp='.$donnees['id'].' class=btn>Supprimer</a><p>' . $donnees['libelle'] . '</p>';
            }
        ?>
        </div>
    </body>
</html>