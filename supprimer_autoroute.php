

<?php

  require "config.php";

  $reponse = $bdd->query('SELECT CodeA FROM autoroute ORDER BY CodeA');
  $autoroutes = $reponse->fetchAll();
?>

<!doctype html>
<html>
    <head>
      <meta charset="utf-8">
      <title>Supprimer autoroute</title>
     <link href="CSS/bibou.css" rel="stylesheet">
      <link href="CSS/suppr_ville.css" rel="stylesheet">
    </head>
 
<body>


<?php include "menu.php"; ?>
<div id ="container">
   <form method="get" action="supprimer_postA.php">
       
              <div id ="depart">
                        <br></br><br></br>
                       <label > Autoroute à supprimer : </label>
                      <select name="CodeA" id="selector" >
                          <?php
           foreach($autoroutes as $donnees)
                  {
                      echo '<option  value="'.$donnees['CodeA'].'">'.$donnees['CodeA'] . '</option>';
                  
                  }

                          ?>
                     
                      </select>


                 </div>

          
                </div>
              <br></br><br></br> 
           <input type="submit" value="Supprimer">
 
      </form>
     </div>
    <?php include "footer.php"; ?>
    </body>
    </html>        
  