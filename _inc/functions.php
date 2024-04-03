<?php
function generate_menu(array $pages): string{
    $menuItems = ''; // Inicializácia premennej pre uloženie HTML kódu navigačného menu
    
    // Prechádza všetky položky v zadanom zozname stránok a URL adries
    foreach($pages as $page_name => $page_url){
        // Pre každú stránku pridá odkaz do navigačného menu
        $menuItems .= '<li><a href="' . $page_url . '">' . $page_name . '</a></li>';
    }

    // Vráti vygenerovaný HTML kód pre navigačné menu
    return $menuItems;
}
function add_stylesheet(){
    echo '<link rel="stylesheet" href="../css/style_index.css">';
    echo '<link rel="stylesheet" href="../css/style_galeria.css">';
    echo '<link rel="stylesheet" href="../css/style_kontakt.css">';
    echo '<link rel="stylesheet" href="../css/style_o_nas.css">';
    echo '<link rel="stylesheet" href="../css/formular.css">';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

    $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');

    switch($page_name){
        case 'index':
            echo '<link rel="stylesheet" href="css/style_index.css">'; 
            echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
            break;
        case 'galeria':
            echo '<link rel="stylesheet" href="css/style_galeria.css">';
            echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
            break;
        case 'kontakt':
            echo '<link rel="stylesheet" href="css/style_kontakt.css">';
            echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
            break;
        case 'o_nas':
            echo '<link rel="stylesheet" href="css/style_o_nas.css">';
            echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
            break;
        case 'formulár':
            echo '<link rel="stylesheet" href="css/formular.css">';
            break;



    }
}

function add_scripts(){
    echo('<script src="js/app.js"></script>');
    $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
}
?>