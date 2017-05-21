
<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=routes;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    $reponse = $bdd->query('SELECT NomV FROM ville ORDER BY NomV');
    $villes = $reponse->fetchAll();
?>

<!doctype html>
<html>
        <head>
            <meta charset="utf-8">
            <meta name="description" content="">
        
            <title>Test2</title>
            
         <link href="bibou.css" rel="stylesheet">
        </head>
 
<body>
     <form method="post" action="testChoixVilleArrive.php">
     <div id ="con">
        <div id ="depart">            
            <label > Ville de départ   : </label>
            <select name="vdepart" id="selector" >
            <?php
                foreach($villes as $donnees)
                {
                    echo '<option  value="'.$donnees['NomV'].'">'.$donnees['NomV'] . '</option>';    
                }
            ?>
            </select>
            <span class="fa fa-chevron-down select-down" aria-hidden="true"></span>
        </div>
        <button type="submit" <a> Valider </a> </button>
    </div>
    </form>
</body>
</html>        