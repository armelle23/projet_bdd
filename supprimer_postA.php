<?php
 
            try
{
  
  $bdd = new PDO('mysql:host=localhost;dbname=routes;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
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
    <a href="panel_admin.php" target="_blank"> <input type="button" value="Retour"> </a>
     <div class="centrer">
              <img class="centrer" src="done.jpg" alt="entrée" />
              </div>
      <?php include "footer.php"; ?>
  
</body>
</html>