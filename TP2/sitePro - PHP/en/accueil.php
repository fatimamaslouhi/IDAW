<!DOCTYPE html>
<html>
    <head>
        <title>Professional website - Home</title>
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
                    <h2 align="center">Welcome - Home </h2>
                </th>
            </tr>
            <tr>
                <td>
                    <b><i>Our website contains several functionalities related to the professional world, it is at your disposal.</i></b>
                </td>
            </tr>

        </table>
        <?php
        require_once('template_menu.php');
        renderMenuToHTML('accueil');
        ?>
        <h3>Accueil</h3>
        <img src="pictures\01.jpg">
        <a href="index.php?page=accueil&lang=fr">French</a>
    </body>
</html>
 