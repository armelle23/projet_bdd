
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
     
    
      <title>Test2</title>
     
     <link href="bibou.css" rel="stylesheet">
  
    
    </head>
 
<body>

   <form method="get" action="supprimer_postT.php">

   <div id ="con">
        
        <div id ="depart">
                
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

       
     <button type="submit" <a >Supprimer </a> </button>

      </form>

 
    </body>
    </html>        
  