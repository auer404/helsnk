<?php

// Activation image pour en-tête (Dashboard > Personnaliser > Image d'en-tête) :
add_theme_support( 'custom-header' );

// Activation menus (Dashboard > Personnaliser > Menus) :
register_nav_menu( 'main', 'Menu Principal' );
register_nav_menu( 'footer', 'Pied de page' );

// Activation "image mise en avant" (Dashboard > Éditeur page/article > Image mise en avant) :
add_theme_support( 'post-thumbnails' );

?>