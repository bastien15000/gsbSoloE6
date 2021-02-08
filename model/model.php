<?php

function dbConnect()
{
	try
    {
        $db = new PDO('mysql:host=localhost;dbname=gsb_bdd_pharma;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function getFamilles()
{
	$db = dbConnect();

	$fam = $db->query("SELECT id, libelle FROM famille;");

	return $fam;
}

function getMedicaments()
{
	$db = dbConnect();

	$med = $db->query("SELECT id, nomCommercial, idFamille, composition, effets, contreIndications FROM medicament;");

    return $med;
}

function getMedicamentsFromFamille($idFamille)
{
	$db = dbConnect();

	$medF = $db->prepare("SELECT medicament.id, nomCommercial, idFamille, composition, effets, contreIndications FROM medicament INNER JOIN famille ON idFamille = famille.id
	WHERE idFamille = ?;");

	$medF->execute(array($idFamille));

	return $medF;
}

function postFamille($id, $libelle)
{
	$db = dbConnect();

	$requete = $db->prepare('INSERT INTO famille(id, libelle) VALUES (?,?)');
    $affectedLines = $requete->execute(array($id, $libelle));

    return $affectedLines;
}

function postMedicament($id, $nomCommercial, $idFamille, $composition, $effets, $contreIndications)
{
	$db = dbConnect();

	$requete = $db->prepare('INSERT INTO medicament(id, nomCommercial, idFamille, composition, effets, contreIndications) VALUES (?,?,?,?,?,?)');
    $affectedLines = $requete->execute(array($id, $nomCommercial, $idFamille, $composition, $effets, $contreIndications));

    return $affectedLines;
}

function modifyFamille($newId, $libelle, $oldId)
{
	$db = dbConnect();

	$requete = $db->prepare('UPDATE famille SET id = ?, libelle = ? WHERE id = ?');  
    $affectedLines = $requete->execute(array($newId, $libelle, $oldId));

    return $affectedLines;
}

function modifyMedicament($newId, $nomCommercial, $idFamille, $composition, $effets, $contreIndications, $oldId)
{
	$db = dbConnect();

	$requete = $db->prepare('UPDATE medicament SET id = ?, nomCommercial = ?, idFamille = ?, composition = ?, effets = ?, contreIndications = ? WHERE id = ?');  
    $affectedLines = $requete->execute(array($newId, $nomCommercial, $idFamille, $composition, $effets, $contreIndications, $oldId));

    return $affectedLines;
}

function removeFamille($id)
{
	$db = dbConnect();

	$requete = $db->prepare('DELETE FROM famille WHERE id = ?');
    $affectedLines = $requete->execute(array($id));

    return $affectedLines;
}

function removeMedicament($id)
{
	$db = dbConnect();

	$requete = $db->prepare('DELETE FROM medicament WHERE id = ?');
    $affectedLines = $requete->execute(array($id));

    return $affectedLines;
}

function findMedicament($id)
{
	$db = dbConnect();

	$requete = $db->prepare('SELECT * FROM medicament WHERE id LIKE ?%;');
    $affectedLines = $requete->execute(array($id));

    return $affectedLines;
}




