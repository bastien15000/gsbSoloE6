<?php 

include('../partials/menu.php');?>

<div class="formulaire">
    <table>
        <thead>
            <tr>
                <th colspan="4"><h1>Modifier une famille : </h1></th>
            </tr>
        </thead>
        <tbody>
        <?='<form action=../../routeur/routeurFamilles.php?action=updateFamille&amp;idFamModif=' . $_GET['idFamModif'] . ' method=post>
                <tr>
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
            </form>'?>
        </tbody>
    </table>
</div>

<?php include('../partials/footer.php');?>