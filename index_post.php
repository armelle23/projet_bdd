
<?php


try
{
	$bdd = new PDO('mysql:host=localhost;dbname=routes;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
        
}
if(POST["table"]=='paris')
{
 
$req= select * from ville;

 echo $donnees['NomV'];

}

?>


 