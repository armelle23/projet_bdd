<?php

  require "config.php";

  $CodT  = $_GET["CodT"] ;

  $reponse = $bdd->query('DELETE FROM troncon where CodT='.$CodT);
  $reponse->execute();
 
  if($reponse)
  {
    echo("Vous avez supprimer le tronçon ! ") ;
  }
  else
  {
    echo(" échoué") ;
  }
?>


<!DOCTYPE html>
<html>
<head>
  <title>Supprimer tronçon</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>

<br></br>
    <a href="panel_admin.php" target="_blank"> <input type="button" value="Retour"> </a>
     <div class="centrer">
              <img class="centrer" src="done.jpg" alt="entrée" />
              </div>
      <?php include "footer.php"; ?>
  
</body>
</html>