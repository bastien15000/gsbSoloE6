<!DOCTYPE html>
    <head>
        <title>Consulter</title>
        <link rel="stylesheet" href="/gsbSoloE6/public/css/consulter.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="vue-medicaments">
            <?php
            if(isset($_GET['idFamille'])){
                ?><div id="bloc-titre"><h1 id="liste-titre" class="liste-medicaments">Liste des médicaments de la famille <?=$_GET['idFamille']?></h1></div><?php
            }
            else {
                ?><div id="bloc-titre"><h1 id="liste-titre" class="liste-medicaments">Liste des médicaments</h1><a href="../view/forms/ajoutMedic.php" id="crud" class="btn">Ajouter</a></div><?php
            }?> 
            <div class="les-medicaments">
            <?php
                while($donnees = $lesMedicaments->fetch()) {
                    if(isset($_GET['idFamille'])) {
                        $donnees['idFamille'] = $_GET['idFamille'];
                    }

                    echo '<div class="unMedic"><h3 id="liste-medicaments">' . $donnees['id'] . ' : </h3>
                    <a href=?action=getMedicament&amp;idMed='. $donnees['id'] . ' class=btn id=crud>Modifier</a>
                    <a href=?action=deleteMedicament&amp;idMedSupp='.$donnees['id'].' class=btn id=crud>Supprimer</a><p>
                    <p>Nom commercial : ' . $donnees['nomCommercial'] . '</p>
                    <p> Id Famille : ' . $donnees['idFamille'] . '</p>
                    <p>Composition : ' . $donnees['composition'] . '</p>
                    <p>Effets : ' . $donnees['effets'] . '</p>
                    <p>Contre-Indications : ' . $donnees['contreIndications'] . ' </p></div>';
                }
            ?>
            </div>
        </div>
    </body>
</html>