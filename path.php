<?php
    require "config.php";

    $vDepart= $_POST['vDepart'];
    $varrivee= $_POST['varrivee'];

    $codePostalDepart = $bdd->prepare("SELECT CodeP FROM ville WHERE NomV = '$vDepart'"); 
    $codePostalDepart->execute();
    $codeDepart = $codePostalDepart->fetchAll()[0]['CodeP'];
    //print_r("code depart ".$codeDepart);

    $KmDepart = $bdd->prepare("SELECT t.DuKm FROM  ville v, sortie s, troncon t  WHERE s.CodeP = '$codeDepart' AND s.CodT = t.CodT"); 
    $KmDepart->execute();
    $kmDebut = $KmDepart->fetchAll()[0]['DuKm'];
    //print_r("km debut : ".$kmDebut);

    $codePostalArrive =  $bdd->prepare("SELECT CodeP FROM ville WHERE NomV = '$varrivee'"); 
    $codePostalArrive->execute();
    $codeArrive = $codePostalArrive->fetchAll()[0]['CodeP'];
    //print_r("code arrive : ".$codeArrive);
            
 
    $KmFin = $bdd->prepare("SELECT t.AuKm FROM  ville v, sortie s, troncon t  WHERE s.CodeP = '$codeArrive' AND s.CodT = t.CodT "); 
    $KmFin->execute();
    $KmArrive = $KmFin->fetchAll()[0]['AuKm'];
    //print_r("km arrive : ".$KmArrive);



    if ($codeArrive === $codeDepart) {
        $nbKm = 0;
    }
    else
    {
        $troncons = $bdd->prepare("SELECT * FROM troncon WHERE DuKm >= '$kmDebut' AND AuKm <= '$KmArrive' ORDER BY CodT ASC");
        $troncons->execute();
        $trajet = $troncons->fetchAll();
        //print_r($trajet);
        
        $sortie = $bdd->prepare("SELECT s.Numero FROM  sortie s WHERE s.CodeP = '$codeArrive'"); 
        $sortie->execute();
        $sortir = $sortie->fetchAll()[0]['Numero'];
        //print_r($sortir);        

        $nbKm = $KmArrive- $kmDebut;
    }  
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Autoroutes</title>
    <link href="assets/lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="menu_deroulant.css" rel="stylesheet">
    <link href="bibou.css" rel="stylesheet">
    <link href="login.css" rel="stylesheet">
    <link href="path.css" rel="stylesheet">
    <link href="team.css" rel="stylesheet">

</head>
<body>
<form method="post" action="BDD_project.php">
<div id="container">
       <div id="login">
            <strong>Ville de depart </strong> <?php echo $vDepart."<br/>";?>
            <strong>Ville d'arrivée</strong> <?php echo $varrivee;?>
        </div>
        <div id="login"> <strong> Les troncons d'autoroute à emprunter son : <br/> </strong> 
        <?php    
            if ($nbKm != 0) {
                echo "Sur l'autoroute : ".$trajet[0]['CodeA']."<br/>";
                foreach($trajet as $donnees)
                {
                    echo "<pre>Troncons : ".$donnees['CodT'].'<br/>'."\n"."\t Dès le kilomètre : ".$donnees['DuKm'].'<br/>'."\n"." \tjusqu'au kilomètre : ".$donnees['AuKm'].'<br/>'."\n"."</pre>";      
                }
                ?> 
                </div>
                <div id="login"> <?php echo "Prendre la sortie : ".$sortir." vers ".$varrivee ?></div>
                <div id="login"> <?php echo "Nombre de km parcouru entre les 2 villes : ".$nbKm; ?></div><?php
                }
            else
                echo "Faites le tour du périphérique on ne sait jamais ce que vous pourriez découvrir!";
        ?>    </div>         
    </div>
</body>
</html>

