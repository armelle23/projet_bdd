<?php
  
  try
                {
                  
                  $bdd = new PDO('mysql:host=localhost;dbname=routes;charset=utf8', 'root', '');
                }
                catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }

              $NomE  = $_POST["NomE"] ;
           $reponse = $bdd->query("SELECT CA, DateFin FROM entreprise e WHERE e.NomE = '$NomE' ");
           $autoroutes = $reponse->fetchAll();

           $peage = $bdd->query("SELECT NumP , Tarif FROM peage p , entreprise e WHERE e.CodeE = p.CodeE AND '$NomE' = e.NomE ");
            $autoroutes2 = $peage->fetchAll();
?>






<!DOCTYPE html>
<html>
<head>
	<title>Modifier Autoroute</title>
    <link href="style.css" rel="stylesheet">
</head>
 
<body>
<?php include "menu.php"; ?>

<form name="insertion" action="entreprise.php" method="POST">
      <table border="0" align="center" cellspacing="50" cellpadding="2">
        <tr align="center">
         
          <td> Chiffre d'affaire annuel:
                     
                          <?php
            foreach($autoroutes as $donnees)
                  {
                      echo '<option  value="'.$donnees['CA'].'">'.$donnees['CA'] . '</option>';
                  
                  }
                          ?>
			</td>
      <td> Contrat fini en :
                     
                          <?php
            foreach($autoroutes as $donnees)
                  {
                      echo '<option  value="'.$donnees['DateFin'].'">'.$donnees['DateFin'] . '</option>';
                      if($donnees['DateFin'] < 2017)
                      {
                        echo 'ATTENTION : Contrat Fini !';
                      }

                          $DateActuelle = date('Y');
                          $result = $donnees['DateFin'] - $DateActuelle;
                          echo 'Il reste ';
                          echo $result ;
                          echo 'ans de contrat';

                  }
                  
                          ?>
      </td>


      <td> Numero Péage :                     
                          <?php
            foreach($autoroutes2 as $donnees)
                  {
                      echo '<option>'.$donnees['NumP'] . '</option>';
                      echo 'Prix du péage : ';
                      echo '<option>'.$donnees['Tarif'] . '</option>';
                      echo 'euros';
                     
                  
                  }
                          ?>
      </td>
        </tr>
      
      </table>
</form>
</body>
<div class="centrer">
              <img class="centrer" src="autoto.jpg" alt="entrée" />
              </div>
 <a href="panel_admin.php" target="_blank"> <input type="button" value="Retour"> </a>
<?php include "footer.php"; ?>
</html>