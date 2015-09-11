<?php
/*
Plugin Name: Page Formation
Plugin URI: http://www.antoinebrossault.com
Description: Un plugin pour afficher une page de formation dans l'administration
Author: Antoine Brossault
Version: 1.0
*/

// ajouter une page au menu

add_action( 'admin_menu', 'register_my_custom_menu_page' );

function register_my_custom_menu_page() {

  add_menu_page( 'Apprenez à utiliser votre site', 'Formation', 'manage_options', 'antoine-formation-wp/admin.php', '', 'dashicons-awards', 6 );

}
