<?php

$users = array(
// login => password
"anonymous" => "" );

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

$result = $mysqli->query('SELECT login, password ,pseudo FROM connexion;') ;

if (!$result) {
  die('<p>ERREUR Requête invalide : '.$mysqli->error.'</p>');
}

for ($i=0 ; $i < $result->num_rows ; $i++) {
  $row = $result->fetch_assoc() ;
  $password = $row['password'] ;
  $login = $row['login'] ;
  $pseudo = $row['pseudo'] ;
  $users+= [ $login => $password];
}
$result->free() ;

#print_r($users);

$login = "anonymous";
$errorText = "";
$successfullyLogged = false;
if(isset($_GET['login']) && isset($_GET['password'])) {
$tryLogin=$_GET['login'];
$tryPwd=$_GET['password'];
// si login existe et password correspond
if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
    $successfullyLogged = true;
    $login = $tryLogin;
    } else
    $errorText = "Erreur de login/password";
    } else
    $errorText = "Merci d'utiliser le formulaire de login";
    if(!$successfullyLogged) {
    echo $errorText;
    } else {
    echo "<h1>Bienvenu ".$pseudo."</h1>
       <p>Vous etes connect&eacute;</p> 
       <a href=\"login.php\">Se d&eacuteconnecter</a>";
    }
    ?>