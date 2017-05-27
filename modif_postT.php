<?php
    require "config.php";
?>

<!DOCTYPE html>
<html>

<head>
<link href="CSS/style.css" rel="stylesheet">
</head>

<body>

		<div class="text">
			<?php
			
			if (isset($_POST['CodT'])) {
				
				$query = "SELECT * FROM troncon WHERE CodT=:CodT";
				$query_params = array(
					':CodT'=>$_POST['CodT']
					);
				try 
				{
					$stmt = $bdd->prepare($query);
					$result = $stmt->execute($query_params);
				} 
				catch (PDOExeption $ex) {
					//die("Fail to query");
				}

				$row = $stmt->fetchAll();
				
				
				
				if (is_numeric($_POST['DuKm']) && $_POST['DuKm'] != NULL) {
					$query = "UPDATE troncon SET DuKm=:Dukm WHERE CodT=:CodT";
					$query_params = array(
						':Dukm' => $_POST['DuKm'],
						':CodT' => $_POST['CodT']
						);
					try 
					{
						$stmt = $bdd->prepare($query);
						$result = $stmt->execute($query_params);
					} 
					catch (PDOExeption $ex) {
						//die("Fail to query");
					}

					if($query)
						  {
						    echo("Vous avez modifié le kilomètre initial ") ;
						  }

										
							}


				if (is_numeric($_POST['AuKm']) && $_POST['AuKm'] != NULL) {
					$query = "UPDATE troncon SET AuKm=:Aukm WHERE CodT=:CodT";
					$query_params = array(
						':Aukm' => $_POST['AuKm'],
						':CodT' => $_POST['CodT']
						);
					try 
					{
						$stmt = $bdd->prepare($query);
						$result = $stmt->execute($query_params);
					} 
					catch (PDOExeption $ex) {
						//die("Fail to query");
					}
					if($query)
						  {
						    echo("Vous avez modifié le kilomètre final ") ;
						  }
				}

				if (is_numeric($_POST['CodeA']) && $_POST['CodeA'] != NULL) {
					$query = "UPDATE troncon SET CodeA=:CodeA WHERE CodT=:CodT";
					$query_params = array(
						':CodeA' => $_POST['CodeA'],
						':CodT' => $_POST['CodT']
						);
					try 
					{
						$stmt = $bdd->prepare($query);
						$result = $stmt->execute($query_params);
					} 
					catch (PDOExeption $ex) {
						//die("Fail to query");
					}
						if($query)
						  {
						    echo("Vous avez modifié le code autoroute") ;
						  }
				
				}
			}
			?>
		</div>
	
	<a href="panel_admin.php" > <input type="button" value="Retour"> </a>
	<div class="centrer">
              <img class="centrer" src="done.jpg" alt="entrée" />
              </div>
	<?php include "footer.php"; ?>
	
</body>
</html>