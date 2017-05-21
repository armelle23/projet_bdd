<?php
    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=routes;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $vDepart= $_POST['vDepart'];
    $varrivee= $_POST['varrivee'];
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
<<<<<<< HEAD
<<<<<<< HEAD

<form method="post" action="BDD_project.php">
<div id="container">
       <div id="login">
            <strong>Ville de depart </strong> <?php echo $vDepart;  ?> 
        </div>

        <?php
            $codePostalDepart = $bdd->prepare("SELECT CodeP FROM ville WHERE NomV = '$vDepart'"); 
            $codePostalDepart->execute();
            $codeDepart = $codePostalDepart->fetchAll()[0]['CodeP'];

            print_r($codeDepart);

            $KmDepart = $bdd->prepare("SELECT t.DuKm FROM  ville v, sortie s, troncon t  WHERE s.CodeP = '$codeDepart' AND s.CodT = t.CodT"); 
            $KmDepart->execute();
            $kmDebut = $KmDepart->fetchAll()[0]['DuKm'];

            print_r($kmDebut);

          $codePostalArrive =  $bdd->prepare("SELECT CodeP FROM ville WHERE NomV = '$varrivee'"); 
            $codePostalArrive->execute();
            $codeArrive = $codePostalArrive->fetchAll()[0]['CodeP'];

            print_r($codeArrive);

            $KmFin = $bdd->prepare("SELECT t.AuKm FROM  ville v, sortie s, troncon t  WHERE s.CodeP = '$codeArrive' AND s.CodT = t.CodT "); // CODE A A AJOUTER
            $KmFin->execute();
            $KmArrive = $KmFin->fetchAll()[0]['AuKm'];

            print_r($KmArrive);

            $troncons = $bdd->prepare("SELECT CodT FROM troncon WHERE DuKm >= '$kmDebut' AND AuKm <= '$KmArrive' ORDER BY CodT ASC");
            $troncons->execute();

            $trajet = $troncons->fetchAll();
            print_r($trajet);

            $nbKm = $KmArrive- $kmDebut;
            echo "Nombre de km parcouru entre les 2 villes : ".$nbKm;
        ?> 
        <div id="login">
           <strong>Ville d'arrivée</strong> <?php echo $varrivee;  ?>
        </div>  
    </div>
</body>
</html>

