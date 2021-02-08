<?php

include(__DIR__.'/../../gsbIntra/view/partials/menu.php');

require(__DIR__.'/../../gsbIntra/controleur/controleur.php');

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
        if(!empty($_POST['id'])) {
            deleteMedicament($_POST['id']);
        } else {
             echo "Veuillez remplir le champ de suppression médicament !";
        }
    }
    elseif($_GET['action'] == 'updateMedicament'){
        if(!empty($_POST['oldId']) && !empty($_POST['newId']) && !empty($_POST['nomCommercial']) && !empty($_POST['idFamille']) && !empty($_POST['composition']) && !empty($_POST['effets']) && !empty($_POST['contreIndications'])) {
            updateMedicament($_POST['newId'], $_POST['nomCommercial'], $_POST['idFamille'], $_POST['composition'], $_POST['effets'], $_POST['contreIndications'], $_POST['oldId']);
        } else {
             echo "Veuillez remplir les champs de modification médicament !";
        }
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

include(__DIR__.'/../../gsbIntra/view/partials/footer.php');