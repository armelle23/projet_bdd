<?php	
	require "config.php";

	//$vdepart= $_POST['vdepart'];
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	echo $username.$password;
?>
<!DOCTYPE html>
<html>
<head>
   <link href="login.css" rel="stylesheet">
   <link href="style.css" rel="stylesheet">
    <title></title>
     
</head>
<body>
<?php

	if ($username && $pw)
	{
		$password = hash('sha256', $pw);
		
		
		$query = "INSERT INTO utilisateur(username,password) VALUES(:username,:password)";
		$query_params = array(
			':username' => $username,
			':password' => $password,
		);	
		try 
		{
			$stmt = $db->prepare($query);
			$result = $stmt->execute($query_params);
		} 	
		catch (PDOExeption $ex) {
			//die("Fail to query ");
		}
		echo "CONGRATS !";
		//header("Location:testChoixVille.php");
	}else
		echo "ERROR !!!!!!!!!!";
		//header("Location:enregistrement.php");
	?> 
		</div>
	</div>
</body>
</html>
</body>
</html>