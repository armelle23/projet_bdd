<?php
try
{
	
	$bdd = new PDO('mysql:host=localhost;dbname=routes;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$reponse = $bdd->query('SELECT * FROM entreprise');

while ($donnees = $reponse->fetch()) // fetch pour recuperer
{
?>
    <p>
    <strong>Nom</strong> : <?php echo $donnees['NomE']; ?><br />
    <strong>Code</strong> : <?php echo $donnees['CodeE']; ?><br />
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
