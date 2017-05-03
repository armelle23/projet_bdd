<?php
try
{
	
	$bdd = new PDO('mysql:host=localhost;dbname=routes;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$reponse = $bdd->query('SELECT * FROM autoroute');

while ($donnees = $reponse->fetch()) // fetch pour recuperer
{
?>
    <p>
    <strong>Kmt</strong> : <?php echo $donnees['KmT']; ?><br />
    <strong>Code</strong> : <?php echo $donnees['CodeA']; ?><br />
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
