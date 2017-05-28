
<?php
    require "config.php";
    $reponse = $bdd->query('SELECT NomV FROM ville ORDER BY NomV');
    $villes = $reponse->fetchAll();
?>

<!doctype html>
<html>
        <head>
            <meta charset="utf-8">
            <meta name="description" content="">
        
            <title>Test2</title>
            <link href="CSS/style.css" rel="stylesheet">
         <link href="CSS/bibou.css" rel="stylesheet">
        </head>
 
<body>
<?php include "menu_2.php"; ?>
<div class="container">
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

                <button type="submit" <a>Valider </a> </button>
    </div>
    </div>
    </form>
    <?php include "footer.php"; ?>
</body>
</html>        