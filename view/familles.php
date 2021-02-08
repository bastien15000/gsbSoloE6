<!DOCTYPE html>
    <head>
        <title>Consulter</title>
        <link rel="stylesheet" href="/gsbIntra/public/css/consulter.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <h1 class="vue-medicaments">Liste des familles de médicaments</h1>
        <div class="vue-medicaments">
        <?php
            while($donnees = $lesfam->fetch())
            {
                echo '<a href=routeurMedicaments.php?idFamille=' .$donnees['id']. '><h3>' . $donnees['id'] . ' : </h3></a><p>' . $donnees['libelle'] . '</p>';
            }
        ?>
        </div>
        <div class="formulaire">
            <table>
                <thead>
                    <tr>
                        <th colspan="3"><h1>Ajouter une famille : </h1></th>
                    </tr>
                </thead>
                <tbody>
                    <form action="routeurFamilles.php?action=addFamille" method="post">
                        <tr>
                            <td>
                                <label for="id">Id : </label>
                                <input id="id" name="id" type="text">
                            </td>
                            <td>
                                <label for="libelle">Libellé : </label>
                                <input class="lastLine" id="libelle" name="libelle" type="text">
                            </td>
                            <td>
                                <input class="btn" type="submit" value="Ajouter">
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
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
            <table>
                <thead>
                    <tr>
                        <th colspan="3"><h1>Supprimer une famille : </h1></th>
                    </tr>
                </thead>
                <tbody>
                    <form action="?action=deleteFamille" method="post">
                        <tr>
                            <td>
                                <label for="id">Id : </label>
                                <input class="lastLine" class="text" id="id" name="id" type="text">
                            </td>
                            <td></td>
                            <td>
                                <input class="btn" type="submit" value="Supprimer">
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </body>
</html>