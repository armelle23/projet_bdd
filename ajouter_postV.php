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
  <title></title>
</head>
<body>
<a href="panel_admin.php" target="_blank"> <input type="button" value="Retour"> </a>
</body>
</html>