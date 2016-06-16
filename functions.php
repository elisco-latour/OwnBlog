<?php
/*
 * =============================================
 * functions.php
 * 
 * le fichier functions du thème enfant
 * 
 * Description: Fichier Functions du thème enfant 
 * 
 * Author: Eli
 * =============================================
 */






/*
 * ---------------------------------------------
 * 1- LES CONSTANTES
 * ---------------------------------------------
 */

// Répertoire du fichier css du thème
 define('THEMEROOT', get_stylesheet_directory_uri());
 
// Répertoire des images
define('IMAGES', THEMEROOT.'/images');

// Répertoire des images
define('JS', THEMEROOT.'/js');






/*
 * ---------------------------------------------
 * 2- CONFIGURATION DU THEME
 * ---------------------------------------------
 */

if(!function_exists('sixteen_child_setup')){
    function sixteen_child_setup(){
        
        // Autoriser la traduction de ce thème
        $lang_dir = THEMEROOT.'/languages';
        load_child_theme_textdomain('mavor',$lang_dir);
        
        //Ajout du support pour les liens des flux automatiques
        add_theme_support('auutomatic-feed-links');
        
        //Ajout du support des vignettes des images
        add_theme_support('posts-thumbnails');
        
        //Enregistrement des menus de navigation
        register_nav_menus( array(
            'enfant-menu-principal'=>  __('PRINCIPAL MENU ENFANT','mavor')
        ));
    }
    
    //Application de la configuration définie
    add_action('after_setup_theme','sixteen_child_setup');
}




/*
add_action("wp_enqueue_scripts","theme_enqueue_styles");
function theme_enqueue_styles(){
    wp_enqueue_style(get_template_directory_uri().STYLESHEETPATH);
}
*/