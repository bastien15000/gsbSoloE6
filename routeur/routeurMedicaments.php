<?php
    session_start();

    include(__DIR__.'/../../gsbSoloE6/view/partials/menu.php');

    require(__DIR__.'/../../gsbSoloE6/controleur/controleur.php');

    if(isset($_GET['action'])){
        if($_GET['action'] == 'Medicaments') {
            medicaments();
        }
        elseif($_GET['action'] == 'addMedicament'){
            if(!empty($_POST['id']) && !empty($_POST['nomCommercial']) && !empty($_POST['idFamille']) && !empty($_POST['composition']) && !empty($_POST['effets']) && !empty($_POST['contreIndications'])) {
                addMedicament($_POST['id'], $_POST['nomCommercial'], $_POST['idFamille'], $_POST['composition'], $_POST['effets'], $_POST['contreIndications']);
            } else {
                echo "Veuillez remplir tous les champs d'ajout du médicament !";
            }
        }
        elseif($_GET['action'] == 'deleteMedicament'){
            deleteMedicament($_GET['idMedSupp']);
        }
        elseif($_GET['action'] == 'updateMedicament'){//conditions indépendantes :

            if(empty($_POST['newId'])) {
                $_POST['newId'] = $_SESSION['oldId'];
            }
            if(empty($_POST['nomCommercial'])) {
                $_POST['nomCommercial'] = $_SESSION['oldNomCommercial'];
            }
            if(empty($_POST['idFamille'])) {
                $_POST['idFamille'] = $_SESSION['oldIdFamille'];
            }
            if(empty($_POST['composition'])) {
                $_POST['composition'] = $_SESSION['oldComposition'];
            }
            if(empty($_POST['effets'])) {
                $_POST['effets'] = $_SESSION['oldEffets'];
            }
            if(empty($_POST['contreIndications'])) {
                $_POST['contreIndications'] = $_SESSION['oldContreIndics'];
            }
            updateMedicament($_POST['newId'], $_POST['nomCommercial'], $_POST['idFamille'], $_POST['composition'], $_POST['effets'], $_POST['contreIndications'], $_SESSION['oldId']);
        }
        elseif($_GET['action'] == 'getMedicament'){
            medicament();
        }
        elseif($_GET['action'] == 'searchMedicament'){
            searchMedicament($_POST['medicSearch']);
        }
    }
    elseif(isset($_GET['idFamille'])){
        medicamentsFromF($_GET['idFamille']);
    }
    else {
        medicaments();
    }
    
include(__DIR__.'/../../gsbSoloE6/view/partials/footer.php');