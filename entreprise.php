<?php
  require "config.php";

  $reponse = $bdd->query('SELECT NomE FROM entreprise ');
  $autoroutes = $reponse->fetchAll();
?>




<!DOCTYPE html>
<html>
<head>
	<title>Modifier Autoroute</title>
    <link href="CSS/ent.css" rel="stylesheet">
</head>
 
<body>
<div class="container">
<?php include "menu.php"; ?>

<form name="insertion" action="entreprise_POST.php" method="POST">
      <table border="0" align="center" cellspacing="50" cellpadding="2">
        <tr align="center">
         
          <td> Nos partenaires :
          <br></br>
                      <select name="NomE" id="selector" >
                          <?php
            foreach($autoroutes as $donnees)
                  {
                      echo '<option  value="'.$donnees['NomE'].'">'.$donnees['NomE'] . '</option>';
                  
                  }
                          ?>
                     
                      </select>
			</td>
        </tr>
          <td colspan="2"><input type="submit" value="Vérifier données"></td>
        </tr>
      </table>
</form>
</div>
</body>
  <div class="centrer">
              <img class="centrer" src="ent.png" alt="entrée" />
              </div>
<?php include "footer.php"; ?>
</html>