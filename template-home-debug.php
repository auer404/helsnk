<?php /* Template Name: Home Debug */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="UTF-8">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/scripts-accueil-IFRAME.js" defer></script>
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-accueil.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-template.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-articles.css">

        <style>
            /* MODIF */
            
            #display-article {
                overflow:hidden;
                width:100vw;
                height:100vh;
            }
            
            #display-article iframe {
                display:none; /* Temporaire - modifié par JS */
                border:none;
                width:100%;
                height:100%; /* Temporaire - modifié par JS */
                overflow:hidden;
                background-color:transparent;
            }
            
        </style>

    <?php wp_head(); ?>

    </head>
    <body class="home">
        <header>
                Header
        </header>

        <div class="photo-container">
            
            <div class="zone-article">
                <?php // Ouverture de "la boucle"
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
?>


<!-- Affichage d'un article (parmi plusieurs) -->


<div class="bloc-article">
    <div class="bloc-contenu">
    <h2><?php the_title(); ?></h2>

<p><?php the_date(); ?></p>
<?php the_excerpt(); ?> 
    </div>

    <div class="bloc-liens">
<a class="in-overlay" href = "<?php the_permalink(); ?>">Lire l'article</a>
    </div>




</div>

<!-- Fin affichage article -->


<?php // Fermeture de "la boucle"
        } // endwhile
    } // endif
?>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/fibre.png" alt="" class="fibre">
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/fibre2.png" alt="" class="fibre2">
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/electro.png" alt="" class="electro">
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/dofus.webp" alt="" class="dofus">
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/portugal.webp" alt="" class="portugal">
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Bitcoin.png" alt="" class="bitcoin">
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/burger.webp" alt="" class="burger">
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/chips.png" alt="" class="chips">
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/sac.webp" alt="" class="sac">
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/thermos.webp" alt="" class="thermos">
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/cigarette.png" alt="" class="cigarette">
            
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/imagedefond[Converti].jpg" alt="image de salle de classe" class="background">
            
            <a href="https://www.helsnk.com/alexandre/" class="in-overlay"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Alexandre.png" alt="" class="alexandre visage"></a>
            <a href="https://www.helsnk.com/anne-valerie" class="in-overlay"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Anne-Valerie.png" alt="" class="anne-valerie visage"></a>
            <a href="https://www.helsnk.com/charly/" class="in-overlay"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Charly.png" alt="" class="charly visage"></a>
            <a href="https://www.helsnk.com/christophe/" class="in-overlay"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Christophe.png" alt="" class="christophe visage"></a>
            <a href="https://www.helsnk.com/clement/" class="in-overlay"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Clement.png" alt="" class="clement visage"></a>
            <a href="https://www.helsnk.com/jd/" class="in-overlay"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/J-D.png" alt="" class="jd visage"></a>
            <a href="https://www.helsnk.com/jonathan/" class="in-overlay"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Jonathan.png" alt="" class="jonathan visage in-overlay"></a>
            <a href="https://www.helsnk.com/maryam/" class="in-overlay"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Maryam.png" alt="" class="maryam visage"></a>
            <a href="https://www.helsnk.com/oumou/" class="in-overlay"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Oumou.png" alt="" class="oumou visage"></a>
            <a href="https://www.helsnk.com/pascal/" class="in-overlay"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Pascal.png" alt="" class="pascal visage"></a>
            <a href="https://www.helsnk.com/quentin/" class="in-overlay"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Quentin.png" alt="" class="quentin visage"></a>
            <a href="https://www.helsnk.com/thibaut/" class="in-overlay"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Thibaut.png" alt="" class="thibaut visage"></a>
            <a href="https://www.helsnk.com/wahib/" class="in-overlay"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Wahib.png" alt="" class="wahib visage"></a>
       
        </div>
        
        <div id="display-article"></div><!-- MODIF : Déplacé -->
        
        <footer>
            Footer
        </footer>
        
        <?php wp_footer(); ?>

    </body> 
</html>