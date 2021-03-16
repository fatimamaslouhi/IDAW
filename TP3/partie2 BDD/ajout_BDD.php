<?php
           /*  $servername = 'localhost';
            $username = 'root';
            $password = '';
            $bd='webdev';
            
            //On établit la connexion
            $mysqli = new mysqli($servername, $username, $password,$bd);
            
            //On vérifie la connexion
            if($mysqli->connect_error){
                die('Erreur : ' .$mysqli->connect_error);
            }

            if(isset($_POST['login']) && isset($_POST['password'])) {
                $Login=$_POST['login'];
                $Pwd=$_POST['password'];
                $Pseudo=$_POST['pseudo'];
            $result = $mysqli->query('INSERT INTO connexion(`login`, `password`, `pseudo`) 
            VALUES ('.$Login.','.$Pwd.','.$Pseudo.');');
            }
            $mysqli->close() ;*/

            if(isset($_POST['login']) && isset($_POST['password'])&& isset($_POST['pseudo'])) {
                $login=$_POST['login'];
                $pwd=$_POST['password'];
                $pseudo=$_POST['pseudo'];
            }
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
            $result = $mysqli->query("INSERT INTO connexion(`id`,`login`, `password`, `pseudo`) 
            VALUES ('','$_POST[login]','$_POST[password]','$_POST[pseudo]')");
            
            $mysqli->close() ;
            
        ?>