<?php
function renderMenuToHTML($currentPageId , $currentLanguage) {
// un tableau qui d\'efinit la structure du site
$mymenufr = array(
// idPage titre
'accueil' => array( 'Accueil' ),
'cv' => array( 'Cv' ),
'projets' => array('Mes Projets'),
'conseilspro' => array('Conseils Pro'),
'contact' => array('Contacts'),
);
$mymenuen = array(
    // idPage titre
    'accueil' => array( 'Home' ),
    'cv' => array( 'Cv' ),
    'projets' => array('Projects'),
    'conseilspro' => array('Tips & advices'),
    'contact' => array('Contacts'),
    );
echo 
    "<nav class=\"menu\">
    <ul>
        ";
if($currentLanguage=='fr')
{
    foreach($mymenufr as $pageId => $pageParameters) {
        if ($pageId == $currentPageId){
            $id=" id='active'";
        }
        else{
            $id="";
        }

        echo ' <li class="element_menu"><a href= fr/'.$pageId.'.php>'.$pageParameters[0].'</a></li>';
            
        }
    echo '</ul></nav>'; } 
if($currentLanguage=='en')
    {
        foreach($mymenuen as $pageId => $pageParameters) {
            if ($pageId == $currentPageId){
                $id=" id='active'";
            }
            else{
                $id="";
            }
    
            echo ' <li class="element_menu"><a href= en/'.$pageId.'.php>'.$pageParameters[0].'</a></li>';
                
            }
        echo '</ul></nav>'; } 
        
        
    }?>