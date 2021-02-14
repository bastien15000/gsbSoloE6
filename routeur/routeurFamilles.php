<?php

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
            deleteFamille($_GET['idFamSupp']);
        }
        elseif($_GET['action'] == 'updateFamille'){
            updateFamille($_POST['newId'], $_POST['libelle'], $_GET['idFamModif']);
        }
    }
    else {
        familles();
    }

    include(__DIR__.'/../../gsbSoloE6/view/partials/footer.php');