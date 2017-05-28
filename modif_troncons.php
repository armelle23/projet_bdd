<?php
  require "config.php";

  $reponse = $bdd->query('SELECT CodT FROM troncon ');
  $villes = $reponse->fetchAll();
?>




<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
      <title>Modifier Tronçon</title>
      <link href="CSS/modif_tron.css" rel="stylesheet">
      <link href="CSS/style.css" rel="stylesheet">
      </head>
<body>
<div id ="container">
<?php include "menu.php"; ?>
 
      <link href="style.css" rel="stylesheet">

		<div class="text">
			<form method="post" action="modif_postT.php">

            <div id ="depart">
			<br></br><br></br>
				
				<label > Code Tronçon : </label>
                      <select name="CodT" id="selector" >
                          <?php
            foreach($villes as $donnees)
                  {
                      echo '<option  value="'.$donnees['CodT'].'">'.$donnees['CodT'] . '</option>';
                  
                  }
                          ?>
                     
                      </select>

				<br><br>
				<label for="price"> Nouveau AuKm</label>
				<input type="Name" name="AuKm" >
				<br><br>
				<label for="price">Nouveau DuKm </label>
				<input type="Name" name="DuKm" >
				<br><br>
				<label for="product"> Nouveau Code Autoroute</label>
				<input type="Name"   name="CodeA" >
				<br><br>
				<input type="submit" value="Enregistrer " >

			</form>
		</div>
		
<?php include "footer.php"; ?>
</div>
</div>
</body>
</html>