<?php
  require "config.php";
       
  $reponse = $bdd->query('SELECT  CodT FROM troncon ORDER BY CodeA');
  $troncon = $reponse->fetchAll();
?>
 
<!doctype html>
<html>
    <head>
      <meta charset="utf-8">
     
    
      <title>Supprimer tronçon</title>
     
     <link href="CSS/bibou.css" rel="stylesheet">
     <link href="CSS/suppr_ville.css" rel="stylesheet">
  
    
    </head>
 
<body>
<div id ="container">
  <?php include "menu.php"; ?>

   <form method="get" action="supprimer_postT.php">

         
              
              <div id ="depart">
                       <br></br><br></br>
                       <label > Tronçon a supprimer : </label>
                      <select name="CodT" id="selector" >
                          <?php
           foreach($troncon as $donnees)
                  {
                      echo '<option  value="'.$donnees['CodT'].'">'.$donnees['CodT'] . '</option>';
                  
                  }

                          ?>
                     
                      </select>


                      <span class="fa fa-chevron-down select-down" aria-hidden="true"></span>

                </div>
              </div>

             <br></br> <br></br>
           <input type="button" value="Supprimer">
         

      </form>
      </div>
       <?php include "footer.php"; ?>
    </body>
    </html>        
