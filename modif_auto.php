<?php
  
    require "config.php";

   $reponse = $bdd->query('SELECT CodeA FROM autoroute ');
   $autoroutes = $reponse->fetchAll();
?>




<!DOCTYPE html>
<html>
<head>
	<title>Modifier Autoroute</title>
    <link href="style.css" rel="stylesheet">
</head>
 
<body>
<?php include "menu.php"; ?>

<form name="insertion" action="modif_postA.php" method="POST">
      <table border="0" align="center" cellspacing="50" cellpadding="2">
        <tr align="center">
         
          <td> Code d'autoroute :
                      <select name="CodeA" id="selector" >
                          <?php
            foreach($autoroutes as $donnees)
                  {
                      echo '<option  value="'.$donnees['CodeA'].'">'.$donnees['CodeA'] . '</option>';
                  
                  }
                          ?>
                     
                      </select>
			</td>
        </tr>
        <tr align="center">
          <td>Nouveau kilométrage</td>
          <td><input type="text" name="KmT"></td>
        </tr>
        <tr align="center">
          <td colspan="2"><input type="submit" value="Modifier"></td>
        </tr>
      </table>
</form>
</body>

<?php include "footer.php"; ?>
</html>