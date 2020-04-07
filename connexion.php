<?php
	
try
        {
            $connexion = new PDO('mysql:host=localhost;dbname=lafleurv2', 'root', '');
			$connexion->query("SET NAMES 'utf8'");
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
?>        
