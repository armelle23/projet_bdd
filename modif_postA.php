<?php
    require "config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier Autoroute</title>
    <link href="CSS/style.css" rel="stylesheet">
</head>
<body>
			<?php
			
			if (isset($_POST['CodeA'])) {
				
					$query = "SELECT * FROM autoroute WHERE CodeA=:CodeA";
					$query_params = array(
						':CodeA'=>$_POST['CodeA']
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
					
					
					
					if (is_numeric($_POST['KmT']) && $_POST['KmT'] != NULL) {
						$query = "UPDATE autoroute SET KmT=:KmT WHERE CodeA=:CodeA";
						$query_params = array(
							':KmT' => $_POST['KmT'],
							':CodeA' => $_POST['CodeA']
							);
						try 
						{
							$stmt = $bdd->prepare($query);
							$result = $stmt->execute($query_params);
						} 
						catch (PDOExeption $ex) {
							//die("Fail to query");
						}
					}
			}
			?>

	<a href="panel_admin.php"> <input type="button" value="Retour"> </a>
	<div class="centrer">
  	<img class="centrer" src="done.jpg" alt="entrée" />
  	</div>
<?php include "footer.php"; ?>
</body>

</html>
