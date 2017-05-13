<?php
 
            try
{
  
  $bdd = new PDO('mysql:host=localhost;dbname=routes;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
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
