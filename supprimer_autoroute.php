

<?php

        try
          {
            
            $bdd = new PDO('mysql:host=localhost;dbname=routes;charset=utf8', 'root', '');
          }

      catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
               

          $reponse = $bdd->query('SELECT CodeA FROM autoroute ORDER BY CodeA');
          $autoroutes = $reponse->fetchAll();
            ?>

<!doctype html>
<html>
    <head>
      <meta charset="utf-8">
      <title>Supprimer autoroute</title>
     <link href="bibou.css" rel="stylesheet">
      <link href="style.css" rel="stylesheet">
    </head>
 
<body>


<?php include "menu.php"; ?>
<div class ="container">
   <form method="get" action="supprimer_postA.php">

         <div id ="con">
              
              <div id ="depart">
                      
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

             
           <button type="submit" <a >Supprimer </a> </button>
           

      </form>
     </div>

    <?php include "footer.php"; ?>
    </body>
    </html>        
  