<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
   
</head>
<body>
    
<p style="color:red">MERCI DE MODIFIER CE TEMPLATE (single.php)</p>
    
<?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); ?>


                <h2><?php the_title(); ?></h2>

       
                <div><?php the_content(); ?></div>
<?php
        } 
    } 
?>  
    
<?php wp_footer() ;?>
    
</body>
</html>