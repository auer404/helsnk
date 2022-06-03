<!---------- TEMPLATE : header.php ------------>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!-- Généré par wp_head() : -->
    <?php wp_head(); ?>
    <!-- Fin bloc wp_head() -->
</head>

<body>

<header <?php if (is_front_page()) {echo "class = 'front-page'";} ?>>
   
   <?php if (get_header_image()) { ?>
   
       <img src = "<?php echo get_header_image(); ?>">
   
   <?php } ?>
   
   <h1><?php bloginfo('name'); ?></h1>
    
    <?php wp_nav_menu(array('theme_location' => 'main')); ?>
    
</header>

<!-------- FIN TEMPLATE : header.php ---------->