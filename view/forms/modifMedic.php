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
        <div class="formulaire">
            <table>
                <thead>
                    <tr>
                        <th colspan="8"><h1>Modifier un médicament : </h1></th>
                    </tr>
                </thead>
                <tbody>
                <?='<form action=/gsbSoloE6/routeur/routeurMedicaments.php?action=updateMedicament method=post>
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