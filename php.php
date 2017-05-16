<?php 
	$fichier = "autoroute.txt"; 
	$tabfich=file($fichier); 
	for( $i = 0 ; $i < count($tabfich) ; $i++ ) 
	{ 
		echo $tabfich[$i]; 
		$sql = "INSERT  INTO autoroute (CodeA, KmT)
            VALUES ( '$CodeA', '$KmT') " ;
	} 
?> 

