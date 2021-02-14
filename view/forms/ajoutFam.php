<?php include('../partials/menu.php');?>

<div class="formulaire">
    <table>
        <thead>
            <tr>
                <th colspan="3"><h1>Ajouter une famille : </h1></th>
            </tr>
        </thead>
        <tbody>
            <form action="../../routeur/routeurFamilles.php?action=addFamille" method="post">
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