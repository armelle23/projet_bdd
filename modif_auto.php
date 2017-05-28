<?php
  
    require "config.php";

   $reponse = $bdd->query('SELECT CodeA FROM autoroute ');
   $autoroutes = $reponse->fetchAll();
?>



<!DOCTYPE html>
<html>
<head>
	<title>Modifier Autoroute</title>
<link href="CSS/modif_tron.css" rel="stylesheet">
      <link href="CSS/style.css" rel="stylesheet">
</head>
 
<body>
<div id ="container">
<?php include "menu.php"; ?>

  <div class="text">

        <form name="insertion" action="modif_postA.php" method="POST">
    
         
            <div id ="depart">
      <br></br><br></br>
          <label> Code d'autoroute :</label>
                      <select name="CodeA" id="selector" >
                          <?php
            foreach($autoroutes as $donnees)
                  {
                      echo '<option  value="'.$donnees['CodeA'].'">'.$donnees['CodeA'] . '</option>';
                  
                  }
                          ?>
                     
                      </select>
			
        <br></br><br></br>
          <label>Nouveau kilométrage</label>
          <labe><input type="text" name="KmT"></label>
        
        <br></br>
       <input type="submit" value="Enregistrer">
       </div>
</form>
</div>
</div>
</body>
<?php include "footer.php"; ?>
</html>