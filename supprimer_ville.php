<?php
  require "config.php";
  $reponse = $bdd->query('SELECT NomV, CodeP FROM ville ORDER BY NomV');
  $villes = $reponse->fetchAll();
?>


<!doctype html>
<html>
    <head>
      <meta charset="utf-8">
     
      <title>Supprimer Ville</title>
     
     <link href="CSS/bibou.css" rel="stylesheet">
      <link href="CSS/suppr_ville.css" rel="stylesheet">
     
    
    </head>
    <?php include "menu.php"; ?>
      <body>
      <div id="container">

         <form method="get" action="supprimer_postV.php">

           
                  
                  <div id ="depart">
                           <br></br> <br></br>
                           <label > Ville a supprimer  : </label>
                          <select name="CodeP" id="selector" >
                              <?php
               foreach($villes as $donnees)
                      {
                          echo '<option  value="'.$donnees['CodeP'].'">'.$donnees['NomV'] . '</option>';
                      
                      }

                              ?>
                         
                          </select>


                          <span class="fa fa-chevron-down select-down" aria-hidden="true"></span>

               </div>

                 <br></br> <br></br> <br></br>
                <input type="submit" value="Supprimer" >

            </form>
            </div>

        <?php include "footer.php"; ?>
          </body>
    </html>        
  