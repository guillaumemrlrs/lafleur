<?php
if(isset($_REQUEST['action']))
    $action=$_REQUEST['action'];
    else 
    $action='connexion';
switch($action)
{
    case'connexion':
    {
        if(!estconnecte()){
            include('vues/v_connexion.php');
        }
        else{
            $lesCategories=$pdo->getLesCategories();
            include ('vues/v_deconnexion.php');
            include('vues/v_categoriesAdmin.php');
        }
        break;
    }
    case'validConnexion':
    {
        $user=$_REQUEST['user'];
        $mdp=$_REQUEST['mdp'];
        $n=$pdo->validerAdmin($user,$mdp);
        if($n==1){
            enregAdmin();
            $lesCategories=$pdo->getLesCategories();
            include('vues/v_deconnexion.php');
            include('vues/v_categoriesAdmin.php');
        }
        else{
            $message="Erreur d'identification ou de mot de passe";
            include('vues/v_message.php');
            include ('vues/v_connexion.php');
        }
        break;
    }
    case'voirProduits':
    {
        if(estconnecte()){
            include('vues/v_deconnexion.php');
            $lesCategories=$pdo->getLesCategories();
            include('vues/v_categoriesAdmin.php');
            $categorie=$_REQUEST['categorie'];
            $lesProduits=$pdo->getLesProduitsDeCategorie($categorie);
            include('vues/v_produitsAdmin.php');
        }
        else{
            include('vues/v_connexion.php');
        }
    }
    break;
    
    case 'deconnecter':
    {
        if(!estconnecte()){
            include('vues/v_connexion.php');
        }
        else{
            deconnecter();
        }
        break;
    }
    case 'modifier':
    {
        if(estconnecte()){
            $idProduit =$_REQUEST['idProduit'];
            echo"id = ".$idProduit;
            $infosProduit = $pdo->getProduit($idProduit);
            $description = $infosProduit['description'];
            $prix=$infosProduit['prix'];
            include('vues/v_deconnexion.php');
            include('vues/v_modifProduit.php');
        }
        else{
            include('vues/v_connexion.php');
        }
        break;
}
}

?>