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
            $mysqli->close() ;
*/
            
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

            $result = $mysqli->query("INSERT INTO connexion(`id`,`login`, `password`, `pseudo`) 
            VALUES ('$_POST[id]','$_POST[login]','$_POST[password]','$_POST[pseudo]')");
            echo 'Ajout réussie';
            $mysqli->close() ;
                    ?>