<form method="POST" action="index.php?uc=gererPanier&action=passerCommande">
<img src="images/panier.gif"	alt="Panier" title="panier"/>
<?php

foreach( $lesProduitsDuPanier as $unProduit) 
{
	$id = $unProduit['id'];
	$description = $unProduit['description'];
	$image = $unProduit['image'];
	$prix = $unProduit['prix'];
	
	?>
	<p>
            Quantité :<input type="number" name="qte<?php echo $id;?>" value="1" size="5">
	<img src="<?php echo $image ?>" alt=image width=100	height=100 />
	<?php
		echo	$description."($prix Euros)";
	?>	
	<a href="index.php?uc=gererPanier&produit=<?php echo $id ?>&action=supprimerUnProduit" 
           onclick="return confirm('Voulez-vous vraiment retirer cet article frais?');">
	<img src="images/retirerpanier.png" TITLE="Retirer du panier" ></a>
	
	
	</p>
	<?php
}
?>
<br>
<input type="submit" value="Passer Commande" name="valider">
<!--<a href=index.php?uc=gererPanier&action=passerCommande><img src="images/commander.jpg" TITLE="Passer commande" ></a>!-->
<input type="reset" value="annuler" name="annuler">
</form>