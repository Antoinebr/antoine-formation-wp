<?php
/*
Plugin Name: Page Formation
Plugin URI: http://www.antoinebrossault.com
Description: Un plugin pour afficher une page de formation dans l'administration
Author: Antoine Brossault
Version: 1.0
*/



add_action( 'admin_menu', 'register_formation_page');

/**
* [register_formation_page]
* Enregistre la page de formation
*/
function register_formation_page() {
  add_menu_page( 'Apprenez à utiliser votre site', 'Formation', 'manage_options', 'antoine-formation-wp/admin.php', '', 'dashicons-awards', 6 );
}


/**
*
*/
class videoFormation{

  private $formationData;

  function __construct($formationData){
    $this ->formationData = $formationData;
  }

  public function generateList(){

    foreach ($this->formationData as $formation) {

      $title = $formation["title"];
      $url =  $formation["url"];

      echo "
      <div class='formation-video inlineblock'>
      <h2>$title</h2>
      <iframe width='560' height='315' src='$url' frameborder='0' allowfullscreen></iframe>
      </div>
      ";

    }

  }

}
