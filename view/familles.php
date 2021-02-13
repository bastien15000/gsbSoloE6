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
                      <a href="#" class="btn">Modifier</a><a href=?action=deleteFamille&amp;idFamSupp='.$donnees['id'].' class=btn>Supprimer</a><p>' . $donnees['libelle'] . '</p>';
            }
        ?>
        </div>
        <div class="formulaire">
            <table>
                <thead>
                    <tr>
                        <th colspan="4"><h1>Modifier une famille : </h1></th>
                    </tr>
                </thead>
                <tbody>
                    <form action="?action=updateFamille" method="post">
                        <tr>
                            <td>
                                <label for="oldId">Id famille à modifier : </label>
                                <input class="text" id="oldId" name="oldId" type="text">
                            </td>
                            <td>
                                <label for="newId">Modifier id : </label>
                                <input class="text" id="newId" name="newId" type="text"><br>
                            </td>
                            <td>
                                <label for="libelle">Modifier libellé : </label>
                                <input class="lastLine" class="text" id="libelle" name="libelle" type="text">
                            </td>
                            <td>
                                <input class="btn" type="submit" value="Modifier">
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </body>
</html>