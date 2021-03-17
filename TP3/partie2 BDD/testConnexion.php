<!DOCTYPE html>
<html>
    <head>
        <title>Test Connexion BDD</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $bd='webdev';
            
            //On établit la connexion
            $mysqli = new mysqli($servername, $username, $password,$bd);
            
            //On vérifie la connexion
            if($mysqli->connect_error){
                die('Erreur : ' .$mysqli->connect_error);
            }
            #echo 'Connexion réussie';

            $result = $mysqli->query('SELECT id,pseudo FROM connexion;') ;

            if (!$result) {
              die('<p>ERREUR Requête invalide : '.$mysqli->error.'</p>');
            }
            echo '<br><br><table border=3>
                    <tr><th>Identifiant</th><th>Nom & pr&eacutenom</th></tr>';
            for ($i=0 ; $i < $result->num_rows ; $i++) {
              $row = $result->fetch_assoc() ;
              $id = $row['id'] ;
              $pseudo = $row['pseudo'] ;
              echo '<tr><td>'.$id.'</td><td> '.$pseudo.'</td>'."\r\n" ;
            }
            echo '</table>';
            $result->free() ;
            
            $result = $mysqli->query('INSERT INTO connexion(`id`, `login`, `password`, `pseudo`) 
            VALUES (8,\'hugo.levonte\',\'pswd8\',\'Hugo Levonte\');');
            $mysqli->close() ;
        ?>
    </body>
</html>