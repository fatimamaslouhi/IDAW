<!DOCTYPE html>
<html>
    <head>
        <title>Inscription</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Inscription</h1>  
        
            <form id="login_inscrption" method="POST" action ="ajout_BDD.php" >
            <table>
            <tr>
            <th>Id :</th>
            <td><input type="text" name="id"></td>
            </tr>
            <tr>
            <th>Login :</th>
            <td><input type="text" name="login"></td>
            </tr>
            <tr>
            <th>Mot de passe :</th>
            <td><input type="password" name="password"></td>
            </tr>
            <tr>
            <th>Pseudo</th>
            <td><input type="text" name="pseudo"></td>
            </tr>
            <tr>
            <th></th>
            <td><input type="submit" value="Valider" /></td>
            </tr>
            </table>
            </form>

        <?php
        
        ?>
    </body>
</html>