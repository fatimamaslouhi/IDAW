<?php
    require_once('template_header.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Site professionnel - Accueil</title>
    </head>
    <body>
        <table align="center">
            <tr>
                <td>
                    <img src="pictures\02.png"/>
                    <img src="pictures\02.png"/>
                </td>
            </tr>
            <tr>
                <th>
                    <h2 align="center">Bienvenue - Page d'accueil</h2>
                </th>
            </tr>
            <tr>
                <td>
                    <b><i>Notre site web contient plusieurs fonctionalités liées au monde professionnel, il est sous votre disposition.</i></b>
                </td>
            </tr>

        </table>
        <?php
        require_once('template_menu.php');
        renderMenuToHTML('index');
        ?>
        <h3>Accueil</h3>
        <img src="pictures\01.jpg">
        <?php
            include("template_footer.php");
        ?>
    </body>
</html>
 