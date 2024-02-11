<?php

$titre = "macip-courtage.fr";

// CGU
/* if (isset($_GET['page']) && 'cgu' === $_GET['page']) {
    ob_start();
    require_once('vues/page-cgu.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');

} */

// MENTIONS LEGALES
if (isset($_GET['page']) && 'mentions-legales' === $_GET['page']) {
    ob_start();
    require_once('vues/page-mentions-legales.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}


// TEMOIGNAGES et/ou PARRAINAGE
/* elseif (isset($_GET['page']) && 'temoignages' === $_GET['page']) {
    ob_start();
    require_once('vues/page-temoignages.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
} */

// CONTACT & HORAIRES
elseif (isset($_GET['page']) && 'contact-horaires' === $_GET['page']) {
    ob_start();
    require_once('vues/page-contact-horaires.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}

else {
    ob_start();
    require_once('vues/page-accueil.php');
    //$contenu = ob_get_clean();
    //require_once('vues/layout.php');
}

