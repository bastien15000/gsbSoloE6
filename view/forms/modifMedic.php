<?php 

while($donnee = $lesMedicaments->fetch()) {
    if($donnee['id'] == $_GET['idMed']) {
        $_SESSION['oldId'] = $_GET['idMed'];
        $_SESSION['oldNomCommercial'] = $donnee['nomCommercial'];
        $_SESSION['oldIdFamille'] = $donnee['idFamille'];
        $_SESSION['oldComposition'] = $donnee['composition'];
        $_SESSION['oldEffets'] = $donnee['effets'] ;
        $_SESSION['oldContreIndics'] = $donnee['contreIndications'] ;
    }
}
    
?>
        <div class="formulaireMedic">
            <table>
                <thead>
                    <tr>
                        <th colspan="8"><?= "<h1 id=titre-formModif>Modifier " . $_GET['idMed'] . " </h1>"?></th>
                    </tr>
                </thead>
                <tbody>
                <?='<form action=/gsbSoloE6/routeur/routeurMedicaments.php?action=updateMedicament method=post>
                        <tr>
                            <td>
                                <label for="newId">Id : </label>
                                <input class="text" id="newId" name="newId" type="text">
                            </td>
                            <td>
                                <label for="nomCommercial">Nom commercial : </label>
                                <input class="text" id="nomCommercial" name="nomCommercial" type="text">
                            </td>
                            <td>
                                <label for="idFamille">Id Famille : </label>
                                <input class="text" id="idFamille" name="idFamille" type="text">
                            </td>
                            <td>
                                <label for="composition">Composition : </label>
                                <input id="composition" name="composition" type="text">
                            </td>
                            <td>
                                <label for="effets">Effets : </label>
                                <textarea rows=3 id="effets" name="effets" type="text"></textarea>
                            </td>
                            <td>
                                <label for="contreIndications">Contre-Indications : </label>
                                <textarea rows=4 class="lastLine" id="contreIndications" name="contreIndications" type="text"></textarea>
                            </td>
                            <td>
                                <input class="btn" type="submit" value="Modifier">
                            </td>
                        </tr>
                    </form>'?>
                </tbody>
            </table>
        </div>