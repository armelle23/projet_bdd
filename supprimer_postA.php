<?php
 
  require "config.php";
  $CodeA  = $_GET["CodeA"] ;

   $reponse = $bdd->prepare("DELETE FROM autoroute where CodeA= '$CodeA'");
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
    <a href="panel_admin.php" > <input type="button" value="Retour"> </a>
     <div class="centrer">
              <img class="centrer" src="done.jpg" alt="entrée" />
              </div>
      <?php include "footer.php"; ?>
  
</body>
</html>