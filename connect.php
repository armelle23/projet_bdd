<?php	
	require 'config.php';

	$username = $_POST['username'];
	$pw = $_POST['password'];

	// va chercher le contenu de la ligne mail entrée
	$query = "SELECT * FROM utilisateur WHERE mail=:mail";
	// sauvegarde dans un tableau
	$query_params = array(':mail' => $username );

	try 
	{
		$stmt = $db->prepare($query);
		$result = $stmt->execute($query_params);
	} 
	//si n accède pas à la db
	catch (PDOExeption $ex) {
		//die("Fail to query");
	}

	// met le résultat de la requete en tableau
	$row = $stmt->fetch();

	// si le tableau existe ->
	if ($row) 
	{
		// encode le mdp comme lors de l inscription
		$check_pass = hash('sha256',$pw);

		// vérifie que le résultat de l'encodage est le même lors de l'entrée et de l'inscription
		if ($row['password'] == $check_pass) 
		{
			unset($row['password']); // libère le pw
			return 1;
		}
	} 
	else {
		return 0;
	}

?>