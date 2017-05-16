
<?php

            try
{
  
  $bdd = new PDO('mysql:host=localhost;dbname=routes;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
           $reponse = $bdd->query('SELECT CodeA , KmT FROM autoroute ORDER BY CodeA');
            $autoroutes = $reponse->fetchAll();
            ?>

<!doctype html>
<html>
    <head>
      <meta charset="utf-8">
    
   
      <title>Test2</title>
     
     <link href="bibou.css" rel="stylesheet">
    
    
    </head>
 
<body>

   <form method="get" action="supprimer_postA.php">

   <div id ="con">
        
        <div id ="depart">
                
                 <label > Autoroute à supprimer : </label>
                <select name="CodeA" id="selector" >
                    <?php
     foreach($autoroutes as $donnees)
            {
                echo '<option  value="'.$donnees['CodeA'].'">'.$donnees['KmT'] . '</option>';
            
            }

                    ?>
               
                </select>


                <span class="fa fa-chevron-down select-down" aria-hidden="true"></span>

        </div>

       
     <button type="submit" <a >Supprimer </a> </button>
     <a href="panel_admin.php" target="_blank"> <input type="button" value="Retour"> </a>

      </form>

 
    </body>
    </html>        
  