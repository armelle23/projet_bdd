<?php
	require "config.php";
?>


<?php
// FCT AFFICHAGE 2 VILLE

    $codePostal = "SELECT CodeP FROM ville WHERE NomV = :nomV"; // cahr unique
    $codePostal_params = array(':nomV' => $vdepart);
    try {
        $stmt = $bdd->prepare($codePostal);
        $result = $stmt->execute($codePostal_params);
    } catch (PDOExeption $ex) {
        // die ("Fail to query");
    }

    $codeA = "SELECT t.codeA FROM ville v, sortie s, troncon t WHERE v.CodeP = :CodeP AND s.CodT = t.CodT"; //char unique
    $codeA_params = array(':CodeP' => $codePostal);
    try {
        $stmt = $bdd->prepare($codeA);
        $result = $stmt->execute($codeA_params);
    } catch (PDOExeption $ex) {
        // die ("Fail to query");
    }

    $ville = "SELECT v ville FROM ville v, sortie s, troncon t WHERE v.CodeP = s.CodeP AND s.CodT = t.CodT AND t.codeA = :codeA";
    $ville_params = array(':codeA' => $codeA);
    try {
        $stmt = $bdd->prepare($ville);
        $result = $stmt->execute($ville_params);
    } catch (PDOExeption $ex) {
        // die ("Fail to query");
    }


?>



<?php // CALCUL TRONCONS ET PRIX
	$vdepart= $_POST['vdepart'];
	$codePostalDepart = $bdd->prepare("SELECT CodeP FROM ville WHERE NomV = '$vdepart'"); 
	$codePostalDepart->execute();

	$codeDepart = $codePostalDepart->fetchAll()[0]['CodeP'];


	$KmDepart = $bdd->prepare("SELECT t.DuKm FROM  ville.v, sortie.s, troncon.t  WHERE s.CodeP = '$codeDepart' AND s.CodT = t.CodT"); // char unique
 	$KmDepart->execute();

 	$kmDebut = $KmDepart->fetchAll()[0]['DuKm'];

 	$varrivee = $_POST['varrivee'];
	$codePostalArrive =  $bdd->prepare("SELECT CodeP FROM ville WHERE NomV = '$varrivee"); 
	$codePostalArrive->execute();

	$codeArrive = $codePostalArrive->fetchAll()[0]['CodeP'];

	$KmFin = $bdd->prepare("SELECT t.AuKm FROM  ville.v, sortie.s, troncon.t  WHERE s.CodeP = '$codeArrive' AND s.CodT = t.CodT "); // CODE A A AJOUTER
 	$KmFin->execute();

 	$KmArrive = $KmFin->fetchAll()[0]['AuKm'];

	/*$troncons = $bdd->prepare("SELECT CodT FROM troncon WHERE DuKm > '$kmDebut' AND AuKm < '$KmArrive' ORDER BY CodT ASC");
	$troncons->execute();*/

	$nbKm = $KmFin- $kmDebut;
	echo $nbKm;
?>