
<?php

         try
            {
              
              $bdd = new PDO('mysql:host=localhost;dbname=routes;charset=utf8', 'root', '');
            }
         catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }

            
           $reponse = $bdd->query('SELECT CodeA , CodT FROM troncon ORDER BY CodeA');
            $troncon = $reponse->fetchAll();
            ?>
 
<!doctype html>
<html>
    <head>
      <meta charset="utf-8">
     
    
      <title>Supprimer tronçon</title>
     
     <link href="bibou.css" rel="stylesheet">
     <link href="style.css" rel="stylesheet">
  
    
    </head>
 
<body>
  <?php include "menu.php"; ?>

   <form method="get" action="supprimer_postT.php">

         <div id ="con">
              
              <div id ="depart">
                       <br></br><br></br>
                       <label > Tronçon a supprimer : </label>
                      <select name="CodT" id="selector" >
                          <?php
           foreach($troncon as $donnees)
                  {
                      echo '<option  value="'.$donnees['CodT'].'">'.$donnees['CodeA'] . '</option>';
                  
                  }

                          ?>
                     
                      </select>


                      <span class="fa fa-chevron-down select-down" aria-hidden="true"></span>

                </div>
              </div>

             <br></br> <br></br>
            <a href="panel_admin.php" target="_blank"> <input type="button" value="Retour"> </a>
           <button type="submit" <a >Supprimer </a> </button>
         

      </form>
      
    <?php include "footer.php"; ?>
    </body>
    </html>        
