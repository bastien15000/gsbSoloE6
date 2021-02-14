<?php include('../partials/menu.php');?>

<div class="formulaireMedic">
    <table>
        <thead>
            <tr>
                <th colspan="7"><h1>Ajouter un médicament : </h1></th>
            </tr>
        </thead>
        <tbody>
            <form action="../../routeur/routeurMedicaments.php?action=addMedicament" method="post">
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
</div>

<?php include('../partials/footer.php');?>