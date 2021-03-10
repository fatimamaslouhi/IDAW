<?php
    require_once('template_header.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Projets</title>
    </head>
    <body> 
        <nav class="menu"> 
            <ul> 
                <li class=element_menu>
                    <a href="index.php">Accueil</a>
                </li> 
                <li class=element_menu>
                    <a href="cv.php">CV</a>
                </li> 
                <li class=element_menu id="selected" >
                    <a  href="projets.php">Projets</a>
                </li>
                <li class=element_menu>
                    <a href="conseilspro.php">Conseils pro</a>
                </li> 
            </ul> 
        </nav>
                <table align="center">
                    <td>
                        <h1>Projets - Domaine informatique</h1>
                        <h2>Id&eacute;es pour vos prochains projets!</h2>
                        <img src="pictures\dev.jpg">

                    </td>   
                </table>
                <table border = 6 align="center">
                    <tr>
                        <th>Intitul&eacute;</th>
                        <th>Outils et technologies</th>
                        <th>Illustration</th>
                    </tr>
                    <tr>
                        <td>Un site web de r&eacute;servation d'hotel en ligne</td>
                        <td>HTML, CSS, Php</td>
                        <td><img src="pictures\hotel.png"></td>
                    </tr>
                    <tr>
                        <td>Application de gestion de ressources humaines</td>
                        <td>JEE</td>
                        <td><img src="pictures\rh.png"></td>
                    </tr>
                    <tr>
                        <td>Biblioth&eacute;que en ligne</td>
                        <td>HTML, CSS, Php</td>
                        <td><img src="pictures\bibl.png"></td>
                    </tr>

                </table>
    
                <?php
                   include("template_footer.php");
                ?>
    </body>

</html>