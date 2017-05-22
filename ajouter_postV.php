<?php

  $cnx = mysql_connect( "localhost", "root", "" ) ;

  $db  = mysql_select_db( "routes" ) ;
 
  
  $NomV    = $_POST["NomV"] ;

  $CodeP= $_POST["CodeP"] ;
  
 
  $sql = "INSERT  INTO ville (NomV, CodeP)
            VALUES ( '$NomV', '$CodeP') " ;
 

  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
  
  if($requete)
  {
    echo("Vous avez ajouté une nouvelle ville ") ;
  }
  else
  {
    echo("L'ajout à échouée") ;
  }


       
?>
<!DOCTYPE html>
<html>
<head>
  <title>Ville ajout</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>
<br></br>
<a href="panel_admin.php" > <input type="button" value="Retour"> </a>
    <div class="centrer">
  <img class="centrer" src="done.jpg" alt="entrée" />
  </div>
  <?php include "footer.php"; ?>
</body>
</html>