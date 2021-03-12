<?php
    require_once('template_header.php');
?>
<?php
require_once("template_header.php");
require_once("template_menu.php");
$currentPageId = 'accueil';
if(isset($_GET['page'])) {
$currentPageId = $_GET['page'];
}
?>
<header class="bandeau_haut">
<h1 class="titre">FM</h1>
</header>
<?php
renderMenuToHTML($currentPageId);
?>
<section class="corps">
<?php
$pageToInclude = $currentPageId . ".php";
if(is_readable($pageToInclude))
require_once($pageToInclude);
else
require_once("error.php");
?>
</section>
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
 