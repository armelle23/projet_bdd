<?php
  
  try
                {
                  
                  $bdd = new PDO('mysql:host=localhost;dbname=routes;charset=utf8', 'root', '');
                }
                catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }

           $reponse = $bdd->query('SELECT NomE FROM entreprise ');
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

<form name="insertion" action="entreprise_POST.php" method="POST">
      <table border="0" align="center" cellspacing="50" cellpadding="2">
        <tr align="center">
         
          <td> Nos partenaires :
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
</body>
 <a href="panel_admin.php" > <input type="button" value="Retour"> </a>
<?php include "footer.php"; ?>
</html>