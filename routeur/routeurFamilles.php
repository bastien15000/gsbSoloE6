<?php

    session_start();
    $_SESSION["thisIdFamille"];

    include(__DIR__.'/../../gsbSoloE6/view/partials/menu.php');

    require(__DIR__.'/../../gsbSoloE6/controleur/controleur.php');

    if(isset($_GET['action'])){
        if($_GET['action'] == 'Familles') {
            familles();
        }
        elseif($_GET['action'] == 'addFamille'){
            if(!empty($_POST['id']) && !empty($_POST['libelle'])) {
                addFamille($_POST['id'], $_POST['libelle']);
            } else {
                echo "Veuillez remplir tous les champs d'ajout de la famille !";
            }
        }
        elseif($_GET['action'] == 'deleteFamille'){
            deleteFamille($_SESSION["thisIdFamille"]);
        }
        elseif($_GET['action'] == 'updateFamille'){
            if(!empty($_POST['oldId']) && !empty($_POST['newId']) && !empty($_POST['libelle'])) {
                updateFamille($_POST['newId'], $_POST['libelle'], $_POST['oldId']);
            } else {
                echo "Veuillez remplir les champs de modification famille !";
            }
        }
    }
    else {
        familles();
    }
    echo $_SESSION["thisIdFamille"];

    include(__DIR__.'/../../gsbSoloE6/view/partials/footer.php');