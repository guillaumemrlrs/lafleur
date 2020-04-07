<form action="index.php?uc=administrer&action=validConnexion" method="post">
    <p>Administration</p>
    <table>
        <tr>
            <td><label for="login"><strong>User*</strong></label></td>
            <td> <input type="text" name="user" id="login"/></td>
        </tr>
                <tr>
                    <td><label for ="pass"><strong>Mot de passe*</strong></label></td>
                    <td><input type="password" name="mdp" id="pass"/></td>
                </tr>
    </table>
    <input type="submit" name="connexion" value="Se connecter"/>
    <input type="reset" value="Annuler" name="annuler"/>
</form>