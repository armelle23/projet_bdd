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



    $reponse = $bdd->query('DELETE FROM autoroute where CodeA='.$CodeA);
    $reponse->execute();
 

 
 
  if($reponse)
  {
    echo("Vous avez supprimer une autoroute ") ;
  }
  else
  {
    echo(" échoué") ;
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<a href="panel_admin.php" target="_blank"> <input type="button" value="Retour"> </a>
</body>
</html>