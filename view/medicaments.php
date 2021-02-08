<!DOCTYPE html>
    <head>
        <title>Consulter</title>
        <link rel="stylesheet" href="/gsbIntra/public/css/consulter.css">
        <meta charset="UTF-8">
    </head>
    <body>
    <?php 
    if(isset($_GET['idFamille'])){
        ?><h1 class="vue-medicaments">Liste des médicaments de la famille <?=$_GET['idFamille']?></h1><?php
    }
    else {
        ?><h1 class="vue-medicaments">Liste des médicaments</h1><?php
    }?> 
        <div class="vue-medicaments">
        <?php
            while($donnees = $lesMedicaments->fetch())
            {
                if(isset($_GET['idFamille']))
                {
                    $donnees['idFamille'] = $_GET['idFamille'];
                }
                echo '<h3>' . $donnees['id'] . ' : </h3>
                <p>Nom commercial : ' . $donnees['nomCommercial'] . '</p>
                <p> Id Famille : ' . $donnees['idFamille'] . '</p>
                <p>Composition : ' . $donnees['composition'] . '</p>
                <p>Effets : ' . $donnees['effets'] . '</p>
                <p>Contre-Indications : ' . $donnees['contreIndications'] . ' </p>';
            }
        ?>
        </div>
        <div class="formulaire">
            <table>
                <thead>
                    <tr>
                        <th colspan="7"><h1>Ajouter un médicament : </h1></th>
                    </tr>
                </thead>
                <tbody>
                    <form action="?action=addMedicament" method="post">
                        <tr>
                            <td>
                                <label for="id">Id : </label>
                                <input id="id" name="id" type="text">
                            </td>
                            <td>
                                <label for="nomCommercial">Nom commercial : </label>
                                <input id="nomCommercial" name="nomCommercial" type="text">
                            </td>
                            <td>
                                <label for="idFamille">Id famille : </label>
                                <input id="idFamille" name="idFamille" type="text">
                            </td>
                            <td>
                                <label for="composition">Composition : </label>
                                <input id="composition" name="composition" type="text">
                            </td>
                            <td>
                                <label for="effets">Effets : </label>
                                <input id="effets" name="effets" type="text">
                            </td>
                            <td>
                                <label for="contreIndications">Contre-indications : </label>
                                <input class="lastLine" id="contreIndications" name="contreIndications" type="text">
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
                        <th colspan="8"><h1>Modifier un médicament : </h1></th>
                    </tr>
                </thead>
                <tbody>
                    <form action="?action=updateMedicament" method="post">
                        <tr>
                            <td>
                                <label for="oldId">Id médicament à modifier : </label>
                                <input class="text" id="oldId" name="oldId" type="text">
                            </td>
                            <td>
                                <label for="newId">Modifier id : </label>
                                <input class="text" id="newId" name="newId" type="text">
                            </td>
                            <td>
                                <label for="nomCommercial">Modifier nom commercial : </label>
                                <input class="text" id="nomCommercial" name="nomCommercial" type="text">
                            </td>
                            <td>
                                <label for="idFamille">Modifier id Famille : </label>
                                <input class="text" id="idFamille" name="idFamille" type="text">
                            </td>
                            <td>
                                <label for="composition">Modifier composition : </label>
                                <input id="composition" name="composition" type="text">
                            </td>
                            <td>
                                <label for="effets">Modifier effets : </label>
                                <input id="effets" name="effets" type="text">
                            </td>
                            <td>
                                <label for="contreIndications">Modif contre-indications : </label>
                                <input class="lastLine" id="contreIndications" name="contreIndications" type="text">
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
                        <th colspan="3"> <h1>Supprimer un médicament : </h1></th>
                    </tr>
                </thead>
                <tbody>
                    <form action="?action=deleteMedicament" method="post">
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
                <tbody>
            </table>
        </div>
    </body>
</html>