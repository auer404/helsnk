<?php /* Template Name: Page Présentation */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-presentation.css">
    <?php wp_head(); ?>
    <style> @media (max-width: 600px) {
        .trois-colonnes{
            background-image: url(<?php echo get_template_directory_uri(); ?>/img-accueil/TableauMobile.png)
        }
    } </style>
</head>
<body>
<?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); ?>
    <div class="trois-colonnes">
        

        <div class="premiere-colonne">

            <img class="Alexandre" src="<?php echo get_template_directory_uri(); ?>/img-accueil/Alexandre.png" alt="Alexandre">

            <img class="Charly" src="<?php echo get_template_directory_uri(); ?>/img-accueil/Charly.png" alt="Charly">

            <img class="Quentin" src="<?php echo get_template_directory_uri(); ?>/img-accueil/Quentin.png" alt="Quentin">

            <img class="Thibaut" src="<?php echo get_template_directory_uri(); ?>/img-accueil/Thibaut.png" alt="Thibaut">

            <img class="Wahib" src="<?php echo get_template_directory_uri(); ?>/img-accueil/Wahib.png" alt="Wahib">

        </div>

        <div class="deuxieme-colonne">

            <div class="profs">

                <img class="Pascal" src="<?php echo get_template_directory_uri(); ?>/img-accueil/Pascal.png" alt="Pascal">

                <img class="J-D" src="<?php echo get_template_directory_uri(); ?>/img-accueil/J-D.png" alt="Jean-Daniel">

                <img class="Jonathan" src="<?php echo get_template_directory_uri(); ?>/img-accueil/Jonathan.png" alt="Jonathan">

            </div>

            <div class="boite-titre">

                <h2 class="titre"><?php the_title(); ?></h2>

            </div>

            <div class="boite-para">

                <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Tableau.png" alt="Tableau">

                <div class="presentation"><?php the_content(); ?></div>

            </div>

            <div class="boite-retour">

                <a class="retour-presentation" href="<?php echo get_home_url(); ?>">Retour à l'accueil</a>

            </div>

        </div>

        <div class="troisieme-colonne">
            
            <img class="Anne-Valerie" src="<?php echo get_template_directory_uri(); ?>/img-accueil/Anne-Valerie.png" alt="Anne-Valerie">

            <img class="Clement" src="<?php echo get_template_directory_uri(); ?>/img-accueil/Clement.png" alt="Clement">

            <img class="Maryam" src="<?php echo get_template_directory_uri(); ?>/img-accueil/Maryam.png" alt="Maryam">

            <img class="Oumou" src="<?php echo get_template_directory_uri(); ?>/img-accueil/Oumou.png" alt="Oumou">

            <img class="Christophe" src="<?php echo get_template_directory_uri(); ?>/img-accueil/Christophe.png" alt="Christophe">

        </div>

    </div>
     
    <?php 
        } 
    } 
?>  
<?php wp_footer() ;?>
</body>
</html>