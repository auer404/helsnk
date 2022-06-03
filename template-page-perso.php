<?php /* Template Name: Page Perso */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-template.css">
    <?php wp_head(); ?>

</head>
<body>



    <header>
        <div class="bouton_profil_perso">
            <div>
                <img class="" src="<?php echo get_template_directory_uri(); ?>/img-accueil/fleche.png" alt="">
            </div>

            <div id = "bouton-burger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </header>

    <main id="profil_bloc">
        <div class="en_tete_profil">
            <div class="bloc_caricature">
                <img class="" src="<?php the_field("photo"); ?>" alt="">
            </div>
            <?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); ?>
            <div class="description_bloc">
                <h1><?php the_title(); ?></h1>
                <div class="height">
                    <div class="bloc_perso">
                        <p>Age : <?php the_field("age"); ?> ans </p>
                        <p>Genre : <?php the_field("genre"); ?></p>
                        <p>Ethnie : <?php the_field("ethnie"); ?></p>
                        <p>Langue : <?php the_field("langue"); ?></p>
                    </div>
                    <div class="bloc_perso">

                        <p>Passions : <?php the_field("passions"); ?></p>
                        <p>Spécialités : <?php the_field("specialites"); ?> </p>
                        <p>Métier : <?php the_field("metier"); ?></p>
                        <p>Site : <?php the_field("site"); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="partie_perso">
            <?php the_content(); ?>
        </div>

        <?php 
        } 
    } 
?>  
    </main>
  
    <?php wp_footer(); ?>
</body>
</html>

