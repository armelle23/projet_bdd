<?php
  require "config.php";

  $NomE  = $_POST["NomE"] ;
  $reponse = $bdd->query("SELECT CA, DateFin FROM entreprise e WHERE e.NomE = '$NomE' ");
  $autoroutes = $reponse->fetchAll();

  $peage = $bdd->query("SELECT NumP , Tarif FROM peage p , entreprise e WHERE e.CodeE = p.CodeE AND '$NomE' = e.NomE ");
  $autoroutes2 = $peage->fetchAll();
  $benef = $bdd->query("SELECT NumP, Tarif FROM peage p , entreprise e WHERE e.CodeE = p.CodeE AND '$NomE' = e.NomE ");
  $money = $benef->fetchAll();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Modifier Autoroute</title>
    <link href="CSS/style.css" rel="stylesheet">
</head>
 
<body>


<form name="insertion" action="entreprise.php" method="POST">
      <table border="0" align="center" cellspacing="50" cellpadding="2">
        <tr align="center">

        
       

<?php          

 /* $result = array($benefice);
   foreach ($array as $benefice => $element) {
              
               $result = $array[$benefice];
              $result += $array[$benefice] ;
                  echo $result ;
                }*/

                /*foreach($autoroutes as $donnees)
                  {
                      echo '<option  value="'.$donnees['CA'].'">'.$donnees['CA'] . '</option>';

                  
                  }*/
?>

       
         
          <td> Chiffre d'affaire annuel pour chaque péage: <br></br>
                     
                          <?php
                              foreach ($money as $donnees) {

                              
                              echo " CA total pour peage numero " ;
                              echo  $donnees['NumP'] . "<br />";

                              $benefice = ($donnees['Tarif']* 100) ;
                              
                              echo $benefice . '€'."<br />";
                            }


      
                          ?>
			</td>
      <td> Contrat fini en :
                     
                          <?php
            foreach($autoroutes as $donnees)
                  {
                      echo '<option>'.$donnees['DateFin'] . '</option>';
                      if($donnees['DateFin'] < 2017)
                      {
                        echo 'ATTENTION : Contrat Fini !';
                      }

                      else{
                              $DateActuelle = date('Y');
                              $result = $donnees['DateFin'] - $DateActuelle;
                              echo 'Il reste ';
                              echo $result ;
                              echo ' ans de contrat';

                      }     
                  }
                  
                          ?>
      </td>


      <td>                      
                          <?php
            foreach($autoroutes2 as $donnees)
                  {
                      echo "Numero Péage :";
                      echo '<div>'.$donnees['NumP'] . '</div>';
                      echo 'Prix du péage : ';
                      echo '<div>'.$donnees['Tarif'] . ' €</option>'. "<br />";
                      
                     
                  
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
 <a href="panel_admin.php" > <input type="button" value="Retour"> </a>
<?php include "footer.php"; ?>
</html>