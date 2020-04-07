<div id="produits">
    <?php
    foreach ($lesProduits as $unProduit)
    {
        $id=$unProduit['id'];
        $description=$unProduit['prix'];
        $image = $unProduit['image'];
        ?>
    }
    <ul>
        <li><?php echo $id ?></li>
        <li><?php echo $description ?></li>
        <li><?php echo " : ".$prix." Euros" ?>
        <li>
            <a href=index.php?uc=administrer&idProduit=<?php echo $id ?>&action=modifier>
                <img src="images/modifier.gif" title="Modifier"</li></a>
        </li>
        <li>
            <a href=index.php?uc=administer&idProduit=<?php echo $id ?>&action=supprimer onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?')">
                <img src="images/supprimer.gif" title="Supprimer"</li></a>
        </li>
    </ul>
    <?php
    }
    ?>
    <ul>
        <li>
            <a href=index.php?uc=administrer&action=ajouter&categorie=<?php echo $categorie ?>>ajouter un produit de cette catégorie
            
            </a>
        </li>
    </ul>
</div>