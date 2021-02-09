<?php

require(__DIR__.'/../../gsbSoloE6/model/model.php');

function index()
{
    require(__DIR__.'/../../gsbSoloE6/index.php');
}

function familles()
{
	$lesfam = getFamilles(); 
    require(__DIR__.'/../../gsbSoloE6/view/familles.php');
}

function medicaments()
{
	$lesMedicaments = getMedicaments(); 
    require(__DIR__.'/../../gsbSoloE6/view/medicaments.php');
}

function medicamentsFromF($idFamille)
{
	$lesMedicaments = getMedicamentsFromFamille($idFamille); 
    require(__DIR__.'/../../gsbSoloE6/view/medicaments.php');
}

function addFamille($id, $libelle)
{
    $newFamille = postFamille($id, $libelle);
    
    if($newFamille === false){
        die('Impossible d\'ajouter la famille');
    }
    else{
        ?><script> location.replace("/gsbSoloE6/routeur/routeurFamilles.php"); </script><?php
    }
}

function addMedicament($id, $nomCommercial, $idFamille, $composition, $effets, $contreIndications)
{
    $newFamille = postMedicament($id, $nomCommercial, $idFamille, $composition, $effets, $contreIndications);
    
    if($newFamille === false){
        die('Impossible d\'ajouter le médicament');
    }
    else{
        ?><script> location.replace("/gsbSoloE6/routeur/routeurMedicaments.php"); </script><?php
    }
}

function updateFamille($newId, $libelle, $oldId)
{
    $changeFamille = modifyFamille($newId, $libelle, $oldId);

    if($changeFamille == false){
        die('Impossible de modifier la famille');
    }
    else{
        ?><script> location.replace("/gsbSoloE6/routeur/routeurFamilles.php"); </script><?php
    }
}

function updateMedicament($newId, $nomCommercial, $idFamille, $composition, $effets, $contreIndications, $oldId)
{
    $changeMedicament = modifyMedicament($newId, $nomCommercial, $idFamille, $composition, $effets, $contreIndications, $oldId);

    if($changeMedicament == false){
        die('Impossible de modifier le médicament');
    }
    else{
        ?><script> location.replace("/gsbSoloE6/routeur/routeurMedicaments.php"); </script><?php
    }
}

function deleteFamille($id)
{
    $delFamille = removeFamille($id);
    
    ?><script> location.replace("/gsbSoloE6/routeur/routeurFamilles.php"); </script><?php
}

function deleteMedicament($id)
{
    $delMedicament = removeMedicament($id);

    if($delMedicament == false){
        die('Impossible de supprimer le médicament');
    }
    else{
        ?><script> location.replace("/gsbSoloE6/routeur/routeurMedicaments.php"); </script><?php
    }
}

function searchMedicament($id)
{
    $lesMedicaments = findMedicament($id);
    require(__DIR__.'/../../gsbSoloE6/view/medicaments.php');
}