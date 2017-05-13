<?php

  $cnx = mysql_connect( "localhost", "root", "" ) ;

  $db  = mysql_select_db( "routes" ) ;
 
  
  $CodeA   = $_POST["CodeA"] ;

  $KmT= $_POST["KmT"] ;
  
 
  $sql = "INSERT  INTO autoroute (CodeA, KmT)
            VALUES ( '$CodeA', '$KmT') " ;
 

  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
  
  if($requete)
  {
    echo("Vous avez ajouté une nouvelle autoroute ! ") ;
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