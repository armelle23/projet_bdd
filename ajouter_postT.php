<?php

  $cnx = mysql_connect( "localhost", "root", "" ) ;

  $db  = mysql_select_db( "routes" ) ;
 
 
  $CodT  = $_POST["CodT"] ;
  $CodeA= $_POST["CodeA"] ;
  $DuKm= $_POST["DuKm"] ;
  $AuKm= $_POST["AuKm"] ;
  $CodeA_Autoroute = $CodeA;



  $sql = "INSERT  INTO troncon (CodT, CodeA, DuKm , AuKm , CodeA_Autoroute )
            VALUES ( '$CodT', '$CodeA', '$DuKm' , '$AuKm'  , '$CodeA_Autoroute' )" ;
 

  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
  
  if($requete)
  {
    echo("Vous avez ajouté un nouveau tronçon ") ;
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