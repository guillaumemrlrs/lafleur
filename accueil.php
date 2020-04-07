<!DOCTYPE html>
<html>
	<head>
		<title>Accueil Société Lafleur</title>
		<meta charset="utf-8" />
                <link type="text/css" rel="stylesheet" href="fleurs.css" />
	</head>

	<body>
		<div id="bloc_page">
			<header>
				<p id="logo"><img width=50 height="50" src="../images/accueil.jpg" alt="Bienvenue !!!"  /></p>
				<h1>Société Lafleur</h1>
				<h4>6, cloitre St Aignan</h4>
				<h4>45000 Orléans</h4>
			</header>
                        <div id="centre">
                            <nav>

                                    <p id="accueil"><a href="accueil.php" >Accueil</a></p>
                                    <p id="pdt">Nos produits</p>
                                    <?php
                                        Include "connexion.php" ;
                                        if ($connexion)
                                        {
                                                $requete="select * from categorie;";
                                                $resultat=$connexion->query($requete)or die(print_r($connexion->errorInfo()));
                                                while ($ligne = $resultat->fetch())
                                                {

                                    ?>
                                                    <p>
                                                        <a href="listepdt.php?categ=<?php echo $ligne['cat_code'];?>"><?php echo $ligne['cat_libelle'];?></a>
                                                    </p>

                                    <?php
                                                }
                                                $resultat->closeCursor();
                                    }

                                    ?>

                            </nav>
                            <section>
                                    <h3>"Dites-le avec Lafleur"</h3>
                                    <p><img  src="../images/accueil.jpg" alt="Bienvenue !!!"  /></p>
                                    <h4> pour recevoir un bon de commande</h4>
                                    <h4> Appelez notre service commercial au 03.22.84.65.74 </h4>
                                    <p></p>
                            </section>
                        </div>
			<footer>
				<h2>&reg; copyrights Votre nom r&eacute;alis&eacute; le ... </h2>
			</footer>
		</div>
	</body>
</html>
