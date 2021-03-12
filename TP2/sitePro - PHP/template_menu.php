<?php
function renderMenuToHTML($currentPageId) {
// un tableau qui d\'efinit la structure du site
$mymenu = array(
// idPage titre
'index' => array( 'Accueil' ),
'cv' => array( 'Cv' ),
'projets' => array('Mes Projets'),
'conseilspro' => array('Conseils Pro'),
'contact' => array('Contacts'),
);
echo 
    "<nav class=\"menu\">
    <ul>
        ";
foreach($mymenu as $pageId => $pageParameters) {
    if ($pageId == $currentPageId){
        $id=" id='active'";
    }
    else{
        $id="";
    }

    echo ' <li class="element_menu"><a href= '.$pageId.'.php>'.$pageParameters[0].'</a></li>';
        
    }
    echo '</ul></nav>'; } ?>