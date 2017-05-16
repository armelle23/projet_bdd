<?php
	require "config.php";
?>


<?php
// FCT AFFICHAGE 2 VILLE
	$codePostal = "SELECT CodeP FROM ville WHERE NomV = :nomV"; // cahr unique
	$codePostal_params = array(':nomV' => BLABLABLA);
	try {
		$stmt = $bdd->prepare($codePostal);
		$result = $stmt->execute($codePostal_params);
	} catch (PDOExeption $ex) {
		// die ("Fail to query");
	}

	$codeA = "SELECT t.codeA FROM ville.v, sortie.s, troncon.t WHERE v.CodeP = :CodeP AND s.CodT = t.CodT"; //char unique
	$codeA_params = array(':CodeP' => $codePostal);
	try {
		$stmt = $bdd->prepare($codeA);
		$result = $stmt->execute($codeA_params);
	} catch (PDOExeption $ex) {
		// die ("Fail to query");
	}

	$ville = "SELECT v.ville FROM ville.v, sortie.s, troncon.t WHERE v.CodeP = s.CodeP AND s.CodT = t.CodT AND t.codeA = :codeA";
	$ville_params = array(':codeA' => $codeA);
	try {
		$stmt = $bdd->prepare($ville);
		$result = $stmt->execute($ville_params);
	} catch (PDOExeption $ex) {
		// die ("Fail to query");
	}

?>



<?php // CALCUL TRONCONS ET PRIX
	$codePostalDepart = "SELECT CodeP FROM ville WHERE NomV = :nomV"; // char unique
	$codePostalDepart_params = array(':nomV' => ENVOIE VILLE 1);
	try {
		$stmt = $bdd->prepare($codePostalDepart);
		$result = $stmt->execute($codePostalDepart_params);
	} catch (PDOExeption $ex) {
		// die ("Fail to query");
	}

	$KmDepart = "SELECT t.DuKm FROM  ville.v, sortie.s, troncon.t  WHERE s.CodeP = :CodeP AND s.CodT = t.CodT"; // char unique
 	$KmDepart_params = array(':CodeP' => $codePostalDepart);
 	try {
		$stmt = $bdd->prepare($KmDepart);
		$result = $stmt->execute($KmDepart_params);
	} catch (PDOExeption $ex) {
		// die ("Fail to query");
	}

	$codePostalArrive = "SELECT CodeP FROM ville WHERE NomV = :nomV"; // char unique
	$codePostalArrive_params = array(':nomV' => ENVOIE VILLE 2);
	try {
		$stmt = $bdd->prepare($codePostalArrive);
		$result = $stmt->execute($codePostalArrive_params);
	} catch (PDOExeption $ex) {
		// die ("Fail to query");
	}

	$KmArrive = "SELECT t.AuKm FROM  ville.v, sortie.s, troncon.t  WHERE s.CodeP = :CodeP AND s.CodT = t.CodT"; // char unique
 	$KmArrive_params = array(':CodeP' => $codePostalArrive);
 	try {
		$stmt = $bdd->prepare($KmArrive);
		$result = $stmt->execute($KmArrive_params);
	} catch (PDOExeption $ex) {
		// die ("Fail to query");
	}

	$troncons = "SELECT CodT FROM troncon WHERE DuKm > :DuKm AND AuKm < :AuKm ORDER BY CodT
	ASC";
	$troncons_params = array(':DuKm' => $KmDepart, ':AuKm' => $KmArrive);
	try {
		$stmt = $bdd->prepare($troncons);
		$result = $stmt->execute($troncons_params);
	} catch (PDOExeption $ex) {
		// die ("Fail to query");
	}

	$prix = "SELECT SUM (Tarif) FROM peage WHERE CodT IN $troncons"; // pas sure du IN
	$prix_params = array();
	try{
		$stmt = $bdd->prepare($prix);
		$result = $stmt->execute($prix_params);
	} catch (PDOExeption $ex) {
		// die ("Fail to query");
	}

	$nbKm = $KmArrive - $KmDepart;
?>