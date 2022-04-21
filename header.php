<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />

</head>
<body>
<div class="bdp-container">
<div class="bdp" id="barre"></div>
</div>
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
    </header>
    
    </body>
    