<?php
    include 'Connexion.php';

	$req= "select * from produit where pdt_categorie='".$_GET["categ"]."';";
	$reponse = $connexion->query($req);


	/* création de la chaine JSON */

	$rep = "[";
	while($donnee = $reponse->fetch()) {
		if ($rep != "[") {$rep .= ",";}
		$rep .= '{"designation":"'  . $donnee["pdt_designation"] . '",';
		$rep .= '"prix":"'. $donnee["pdt_prix"]. '"}';
	}
	$rep .="]";

	$reponse->closeCursor();
	echo $rep;


?>
