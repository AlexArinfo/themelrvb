<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title></title>
  </head>
  <body>
<<<<<<< HEAD
  <header>
      <?php
      wp_nav_menu(array(
        'menu' => 'Menu principal',
        'container' => 'nav'
      ));
      ?>
      <?php if(has_custom_logo()) : ?>
      <?php the_custom_logo(); ?>
      <?php else : ?>
      <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
      <?php endif; ?>
      <a name="top"></a>
      <div id="page-anim-preloader"></div>
      </header>
=======
  <div class="bdp-container">
    <div class="bdp" id="barre"></div>
  </div>
>>>>>>> alan
  </body>
  