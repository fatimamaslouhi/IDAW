<?php
require_once("template_header.php");
require_once("template_menu.php");
$currentPageId = 'conseilspro';
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
        <title>Conseils</title>
    </head>
    <body>
                <table align="center">
                    <td>
                        <img src="pictures\web.jpg">
                        <h1>Conseils professionnels</h1>
                        <h2>Comment r&eacute;ussir sa carri&egrave;re de d&eacute;veloppeur web !?</h2>
                    </td>   
                </table>
            <br><br><br>
            <div class="conseils"></div>
            <h3>1- Avoir et savoir conserver sa passion</h3>
            <p>
                Pour bien faire ce que l’on fait, il faut l’aimer. 
                Il est donc important que vous aimiez vraiment le d&eacute;veloppement web avant de vous y lancer. 
                Aimez tout ce qui va avec : codage, programmation… 
                Si vous le faites juste parce que c’est un métier qui rémunère bien et parce que sa cote est élevée de nos jours, vous aurez beau vous y lancer, vous n’aurez sûrement pas plus de succès que ceux qui en ont une réelle passion. Pensez-y !
            </p>
            <h3>2- Avoir un bon mentor</h3>
            <p>
                Même le puissant « M&eacute;diateur du crime » Raymond Reddington de la série américaine « Blacklist » avait un mentor. 
                Ceci pour vous dire qu’il vous faut absolument un mentor. Ce dernier aura une attention particulière sur vos travaux, vos recherches et autres. Il vous guidera et vous aidera à élever votre niveau dans la profession ; vous permettant ainsi de vous surpasser et d’avoir une carrière réussie dans le développement web.
            </p>
            <h3>3- Faire de nombreux stages</h3>
            <p>
                Faire des stages, c’est tr&egrave;s important. Après votre formation, pensez-y, même si votre souhait est d’exercer en freelance. Les stages vous aideront à acquérir une certaine expérience pratique dans le domaine. D’ailleurs, la plupart des boîtes qui recrutent dans ce secteur d’activité posent toujours la question de savoir si le postulant a une réelle expérience en développement web avant de le recruter. Les stages étoffent votre expérience et comptent même plus que votre lieu de formation. Si faire un stage dans plusieurs sociétés ne vous tente pas, vous pouvez toujours demander un stage de longue durée pour compenser. Pour ceux qui n’ont pas de mentor, c’est l’occasion rêvée pour en trouver.
            </p>
            <h3>4- Avoir l’esprit d’&eacute;quipe</h3>
            <p>
                « Si tu veux aller vite, marche seul, mais si tu veux aller loin, marchons ensemble ». Cet adage africain colle parfaitement avec ce que nous voulons vous apprendre ici. L’esprit d’équipe est essentiel si vous espérez réussir votre carrière de développeur web. Les développeurs freelances seront peut-être déçus de ce conseil, mais il faut savoir que même en freelance on peut être amené à s’allier à d’autres développeurs aux profils totalement différents, et ce, pour une même structure. L’esprit d’équipe vous permettra de vous démarquer du lot et d’avoir une bonne réputation auprès de vos confrères.
            </p>
            <h3>5- D&eacute;velopper son esprit d’analyse</h3>
            <p>
                C’est très important. D&eacute;velopper le web, d’accord ; mais vous n’y parviendrez pas sans avoir un esprit d’analyse aussi développé. Un travail lié au codage et à la programmation doit suivre une certaine logique. Pour cela, vous devez sans cesse essayer différentes formules, demander à ce qu’on critique votre travail. Ainsi, vous aurez de la matière pour réussir en tant que développeur web. Vous devez aussi adorer les situations complexes, qui demandent plus de réflexions. Cela boostera aussi votre esprit d’analyse et votre créativité.
            </p>
        </div>
        <?php
            include("template_footer.php");
        ?>
    </body>

</html>