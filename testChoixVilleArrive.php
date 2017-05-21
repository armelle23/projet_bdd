<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=routes;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }


    $vdepart= $_POST['vdepart'];
    print_r($vdepart);
    
    $codePostal = $bdd-> prepare ("SELECT CodeP FROM ville WHERE NomV = '$vdepart'"); 
    $codePostal->execute();
    $codePo = $codePostal->fetchAll()[0]['CodeP'];
    print_r($codePo);

    $codeAuto = $bdd->prepare ("SELECT CodeA_Autoroute FROM ville v, sortie s, troncon t WHERE  s.CodT = t.CodT AND v.CodeP = '$codePo'"); 
    $codeAuto->execute();
    $code = $codeAuto->fetchAll()[0]['CodeA_Autoroute'];
    print_r($code);

    $reponse = $bdd->prepare("SELECT v.NomV FROM ville v, sortie s, troncon t WHERE v.CodeP = s.CodeP AND s.CodT = t.CodT AND t.CodeA_Autoroute = '$code'");
    $reponse->execute();
    $villes = $reponse->fetchAll();
    print_r($villes);
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
     <form method="post" action="path.php">
     <div id ="con">
        <div id ="depart">
            <!-- <input type="hidden" name="vdepart" value='vdepart' /> --> 
            <?php ?> 
            <select name="vDepart" id="selector" >
            <?php  echo '<option value="'.$vdepart.'">'.$vdepart . '</option>';     /*
               foreach($vdepart as $donnees)
                {
                    echo '<option value="'.$donnees['NomV'].'">'.$donnees['NomV'] . '</option>';      
                }*/
            ?>
            </select>

             <label > Ville d'arrivee  : </label>
            <select name="varrivee" id="selector" >
            <?php
                foreach($villes as $donnees)
                {
                    echo '<option value="'.$donnees['NomV'].'">'.$donnees['NomV'] . '</option>';      
                }
            ?>
            </select>
             <span class="fa fa-chevron-down select-down" aria-hidden="true"></span>
        </div>
        <button type="submit" <a >Valider </a> </button>
    </div>
    </form>
</body>
</html>        