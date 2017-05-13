
<?php

            try
{
  
  $bdd = new PDO('mysql:host=localhost;dbname=routes;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
           $reponse = $bdd->query('SELECT NomV, CodeP FROM ville ORDER BY NomV');
            $villes = $reponse->fetchAll();
            ?>

<!doctype html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Test2</title>
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
     <link href="bibou.css" rel="stylesheet">
      <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
      <script src="js/jquery-min.js"></script>
      <script src="js/bootstrap.min.js "></script>
    
    </head>
 
<body>

   <form method="get" action="supprimer_post.php">

   <div id ="con">
        
        <div id ="depart">
                
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

       
     <button type="submit" <a >Supprimer </a> </button>

      </form>

 
    </body>
    </html>        
  