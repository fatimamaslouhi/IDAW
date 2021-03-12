<?php
    require_once('template_header.php');
?>
<?php
require_once("template_header.php");
require_once("template_menu.php");
$currentPageId = 'contact';
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
        <title>Contacts</title>
    </head>
    <body>
    <b>Contacts</b>
    </br></br></br></br>
	<table align='center'>
		<tr>Nom:</tr>
		<td></td> </br>
		<tr>Prenom:</tr>
		<td></td> </br>
		<tr>Adresse:</tr>
		<td></td> </br>
		<tr>Téléphone:</tr>
		<td></td> </br>
		<tr>Adresse mail:</tr>
		<td></td> </br>
	</table>
        <img src="pictures\01.jpg">
        <?php
            include("template_footer.php");
        ?>
    </body>
</html>
 