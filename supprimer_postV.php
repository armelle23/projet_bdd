<?php
     require "config.php";
  $CodeP  = $_GET["CodeP"] ;



    $reponse = $bdd->query('DELETE FROM ville where CodeP='.$CodeP);
  $reponse->execute();
 
  if($reponse)
  {
    echo("Vous avez supprimé une ville ") ;
  }
  else
  {
    echo(" échoué") ;
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Supprimer Ville</title>
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
