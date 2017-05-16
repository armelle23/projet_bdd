<?php
	require "config.php";
?>

<?php
	$codePostal = "SELECT CodeP FROM ville WHERE NomV = :nomV";
	$codePostal_params = array(':nomV' => BLABLABLA);
	try {
		$stmt = $bdd->prepare($codePostal);
		$result = $stmt->execute($codePostal_params);
	} catch (PDOExeption $e) {
		// die ("Fail to query");
	}

	$codeA = "SELECT t.codeA FROM ville v, sortie s, troncon t WHERE CodeP = :codP AND CodT"

?>