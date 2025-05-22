<?php 

/**
 * Fonction permettant de générer une page web à partir
 * des données contenues dans le tableau data.
 * Le tableau data doit à minima contenir les champs
 * 'view' et layout'.
 *
 * @param array $data: les données utilisées pour construire la vue
 * @return void
 */
function generatePage(array $data) {
    extract($data);

    $flash = getFlashMessage();

    ob_start();
    require_once $view;
    $content = ob_get_clean();

    require_once $layout;
}

function getFlashMessage():?string {
    if (isset($_SESSION['flash'])) {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }
    
    return null;
}