<?php
    require "config.php";

    $vdepart= $_POST['vdepart'];
    //print_r($vdepart);

    $codePostal = $bdd-> prepare ("SELECT CodeP FROM ville WHERE NomV = '$vdepart'"); 
    $codePostal->execute();
    $codePo = $codePostal->fetchAll()[0]['CodeP'];
    //print_r("code postal ".$codePo);

    $codeAuto = $bdd->prepare ("SELECT t.CodeA_Autoroute FROM ville v, sortie s, troncon t WHERE  s.CodT = t.CodT AND s.CodeP = '$codePo'"); 
    $codeAuto->execute();


?>

<!doctype html>
<html>
        <head>
            <meta charset="utf-8">
            <meta name="description" content="">
        
            <title>Test2</title>
              <link href="style.css" rel="stylesheet">
         <link href="bibou.css" rel="stylesheet">
        </head>
 
<body>

     <form method="post" action="path.php">
     <div id ="con">
        <div id ="depart">
            <label > Ville de départ  : </label>
            <select name="vDepart" id="selector" >
            <?php  
                echo '<option value="'.$vdepart.'">'.$vdepart . '</option>'; 
            ?>
            </select>
        <div id ="depart">
             <label > Ville d'arrivee  : </label>
            <select name="varrivee" id="selector" >
            <?php
                if ($codeAuto == 0) {
                    echo "Pas de route possible à la sortie de cette ville";
                }
                else
                {
                    $code = $codeAuto->fetchAll()[0]['CodeA_Autoroute'];
                    print_r("autoroute : ".$code);
                    $reponse = $bdd->prepare("SELECT v.NomV FROM ville v, sortie s, troncon t WHERE v.CodeP = s.CodeP AND s.CodT = t.CodT AND t.CodeA_Autoroute = '$code'");
                    $reponse->execute();
                    $villes = $reponse->fetchAll();
                    print_r($villes);
                    foreach($villes as $donnees)
                    {
                        echo '<option value="'.$donnees['NomV'].'">'.$donnees['NomV'] . '</option>';      
                    }
                }  
            ?>
            
            </select>
             <span class="fa fa-chevron-down select-down" aria-hidden="true"></span>
        </div>
        </div>

        <button type="submit" <a >Valider </a> </button>
  
    </form>

   <?php include "footer.php"; ?>
</body>

</html>        