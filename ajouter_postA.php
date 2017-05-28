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
    echo("L'ajout à échouée :( ") ;
  }


       
?>
<!DOCTYPE html>
<html>
<head>
  <title>Autoflex</title>
    <link href="CSS/style.css" rel="stylesheet">
</head>
<body>
<br></br>
<a class="btn" href="panel_admin.php" > <input type="button" value="Retour"> </a>
  <div class="centrer">
  <img class="centrer" src="done.jpg" alt="entrée" />
  </div>
<?php include "footer.php"; ?>

</body>
</html>