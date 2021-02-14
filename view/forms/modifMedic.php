<?php include('../partials/menu.php');?>

<div class="formulaire">
            <table>
                <thead>
                    <tr>
                        <th colspan="8"><h1>Modifier un médicament : </h1></th>
                    </tr>
                </thead>
                <tbody>
                <?='<form action=../../routeur/routeurMedicaments.php?action=updateMedicament&amp;idMedicModif=' . $_GET['idMedicModif'] . ' method=post>
                        <tr>
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
                    </form>'?>
                </tbody>
            </table>
        </div>

<?php include('../partials/footer.php');?>