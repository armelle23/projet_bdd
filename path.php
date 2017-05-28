<?php
    require "config.php";

    $vDepart= $_POST['vDepart'];
    $varrivee= $_POST['varrivee'];

    $codePostalDepart = $bdd->prepare("SELECT CodeP FROM ville WHERE NomV = '$vDepart'"); 
    $codePostalDepart->execute();
    $codeDepart = $codePostalDepart->fetchAll()[0]['CodeP'];


    $KmDepart = $bdd->prepare("SELECT t.DuKm FROM  ville v, sortie s, troncon t  WHERE s.CodeP = '$codeDepart' AND s.CodT = t.CodT"); 
    $KmDepart->execute();
    $kmDebut = $KmDepart->fetchAll()[0]['DuKm'];


    $codePostalArrive =  $bdd->prepare("SELECT CodeP FROM ville WHERE NomV = '$varrivee'"); 
    $codePostalArrive->execute();
    $codeArrive = $codePostalArrive->fetchAll()[0]['CodeP'];

            
 
    $KmFin = $bdd->prepare("SELECT t.AuKm, t.CodeA_Autoroute FROM  ville v, sortie s, troncon t  WHERE s.CodeP = '$codeArrive' AND s.CodT = t.CodT "); 
    $KmFin->execute();
    $KmArrive = $KmFin->fetchAll()[0]['AuKm'];



    $CodeAuto = $bdd->prepare("SELECT t.CodeA_Autoroute FROM  ville v, sortie s, troncon t  WHERE s.CodeP = '$codeArrive' AND s.CodT = t.CodT "); 
    $CodeAuto->execute();
    $codeRoute = $CodeAuto->fetchAll()[0]['CodeA_Autoroute'];

    if ($codeArrive == $codeDepart) {
        $nbKm = 0;
    }
    else
    {
        $nbKm = $KmArrive - $kmDebut;

        if ($nbKm < 0 )
        {
            $tmp = $KmArrive;
            $KmArrive = $kmDebut;
            $kmDebut = $tmp;
            $nbKm = $KmArrive- $kmDebut;
        }

        $troncons = $bdd->prepare("SELECT * FROM troncon WHERE CodeA_Autoroute = '$codeRoute' AND AuKm >= '$kmDebut' AND DuKm <= '$KmArrive' ORDER BY CodT ASC");
        $troncons->execute();
        $trajet = $troncons->fetchAll();
        //print_r($trajet);

        $sortie = $bdd->prepare("SELECT Numero FROM  sortie WHERE CodeP = '$codeArrive'"); 
        $sortie->execute();
        $sortir = $sortie->fetchAll()[0]['Numero'];


        $prix = $bdd ->prepare("SELECT SUM(Tarif) FROM peage p, troncon t  WHERE  t.CodeA_Autoroute = '$codeRoute' AND t.AuKm >= '$kmDebut' AND t.DuKm <= '$KmArrive' AND t.CodT = p.CodT");
        $prix->execute();
        $coutTrajet = $prix->fetchAll()[0]['SUM(Tarif)'];
        //print_r($coutTrajet);

        $passage = $bdd ->prepare("SELECT NumP, Tarif, t.CodT FROM peage p, troncon t  WHERE  t.CodeA_Autoroute = '$codeRoute' AND t.AuKm >= '$kmDebut' AND t.DuKm <= '$KmArrive' AND t.CodT = p.CodT");
        $passage->execute();
<<<<<<< HEAD

        $visite = $passage->fetchAll();
    
=======
>>>>>>> 2ad4ebd0a66ed78ca32c4176fc117caad5fd7a9a
        $visite = $passage->fetchAll();
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
    <link href="CSS/menu_deroulant.css" rel="stylesheet">
    <link href="CSS/bibou.css" rel="stylesheet">
    <link href="CSS/login.css" rel="stylesheet">
    <link href="CSS/path.css" rel="stylesheet">
    <link href="CSS/team.css" rel="stylesheet">
    <link href="CSS/style.css" rel="stylesheet">
</head>
<body>
    <?php include "menu_2.php"; ?>
<form method="post" action="BDD_project.php">
<br><br>
<div id="container">
       <div id="login">
            <strong>Ville de depart </strong> <?php echo $vDepart."<br/>";?>
            <strong>Ville d'arrivée</strong> <?php echo $varrivee;?>
        </div>
   
        <
        <?php    
            if ($nbKm != 0) {
                ?>
                <div id="login"> <?php echo "Prendre la sortie : ".$sortir." vers ".$varrivee ?></div>
                <div id="login"> <strong> Les troncons d'autoroute à emprunter son : <br/> </strong> <?php
                echo "Sur l'autoroute : ".$trajet[0]['CodeA']."<br/>";
                foreach($trajet as $donnees)
                {
                    echo "<pre>Troncons : ".$donnees['CodT'].'<br/>'."\n"."\t Dès le kilomètre : ".$donnees['DuKm'].'<br/>'."\n"." \tjusqu'au kilomètre : ".$donnees['AuKm'].'<br/>'."\n"."</pre>";      
                }
            }
                ?> 
        </div>
        <?php    
            if ($nbKm != 0) { ?>     
                <div id="login"> <?php echo "Le prix global des péages est de : ".$coutTrajet?><?php
                foreach($visite as $variable)
                {
                    echo "<pre> Peage : ".$variable['NumP'].'<br/>'."\n"."\t Du troncons : ".$variable['CodT'].'<br/>'."\n"."\t De tarif : ".$variable['Tarif'].'<br/>'."\n"."</pre>";      
                }?></div><?php
            } ?>

            <div id="login"> <?php echo "Nombre de km parcouru entre les 2 villes : ".$nbKm; ?></div> <?php
            if ($nbKm  == 0){
                echo "Faites le tour du périphérique on ne sait jamais ce que vous pourriez découvrir!";
            }
               
                ?>
            </div>         
    </div>
</body>
</html>

