<?php
    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=routes;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
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
<<<<<<< HEAD

<form method="post" action="BDD_project.php">
<div id="container">

=======
    <form method="post" action="BDD_project.php">
        <div id="container">
>>>>>>> c092a289c0bac892bf5e135015b24efd1aede14b
            <div id="login">
                    <strong>Ville de depart </strong> <?php echo $_POST['vdepart'];  ?> 
            </div>
            <div class="content">   
        
            </div>
        </div>
        <div id="container">
            <div id="login">
               <strong>Ville d'arrivée</strong> <?php echo $_POST['varrivee'];  ?>
            </div>
            <div class="content">   
        
            </div>
        </div>
        

     <button type="submit" <a >Valider </a> </button>



   
</body>
</html>

