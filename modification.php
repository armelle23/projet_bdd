<?php
    require "config.php";
?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>
<?php include "menu.php"; ?>
	<div class="container">
		<div class="text">
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
		</div>
	</div>
	<?php include "footer.php"; ?>
</body>
</html>