<!DOCTYPE html>
<html>
<head>
   <link href="login.css" rel="stylesheet">
   <link href="style.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">

    <title></title>
</head>
<body>

<div id ="con">

<?php include "menu.php"; ?>
    <br></br><br></br>
    
    <a href="ajouter_ville.php"> <input type="button" value="Ajouter Ville "> </a>
    <a href="supprimer_ville.php" > <input type="button" value="Supprimer Ville"> </a>
    
    
     <br> <br>
    <a href="ajouter_troncon.php" > <input type="button" value="Ajouter Tronçon"> </a>
    <a href="supprimer_troncon.php" > <input type="button" value="Supprimer Tronçon"> </a>
    <a href="modif_troncons.php" > <input type="button" value="Modifier Tronçon"> </a>
   <br> <br>
    <a href="ajouter_autoroute.php" > <input type="button" value="Ajouter Autoroute "> </a>
    <a href="supprimer_autoroute.php" > <input type="button" value="Supprimer Autoroute"> </a>
    <a href="modif_auto.php" > <input type="button" value="Modifier Autoroute"> </a>
  <br> <br>
   <a href="entreprise.php" > <input type="button" value="Entreprises Partenaires"> </a>

    
</div>
    <?php include "footer.php"; ?>   
</body>
  
</html>