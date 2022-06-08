<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="UTF-8">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
        <!--<script src="<?php echo get_template_directory_uri(); ?>/scripts-accueil.js" defer></script>-->
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-accueil.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-template.css">


        

    <?php wp_head(); ?>

    </head>
    <body class="home">
        <header>
                Header
        </header>

        <div class="photo-container">
            <!--<div id="display-article">
                            <button type="button" id="button-article" class="lien-article">Articles</button>

            </div>-->
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
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/casque.png" alt="" class="casque"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/carnivor2.png" alt="" class="carnivor3"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/carnivor2.png" alt="" class="carnivor2"></a>

            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/carnivor.png" alt="" class="carnivor"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/apple.gif" alt="" class="apple"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/verre.webp" alt="" class="verre"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/fibre.png" alt="" class="fibre"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/fibre2.png" alt="" class="fibre2"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/electro.png" alt="" class="electro"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/dofus.webp" alt="" class="dofus"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/portugal.webp" alt="" class="portugal"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Bitcoin.png" alt="" class="bitcoin"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/burger.webp" alt="" class="burger"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/chips.png" alt="" class="chips"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/sac.webp" alt="" class="sac"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/thermos.webp" alt="" class="thermos"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/cigarette.png" alt="" class="cigarette"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img-accueil/imagedefond[Converti].jpg" alt="image de salle de classe" class="background">
            <a href="https://helsnk.com/alexandre/"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Alexandre.png" alt="" class="alexandre visage in-overlay"></a>
            <a href="https://helsnk.com/anne-valerie"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Anne-Valerie.png" alt="" class="anne-valerie visage in-overlay"></a>
            <a href="https://helsnk.com/charly/"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Charly.png" alt="" class="charly visage in-overlay"></a>
            <!-- <a href="https://helsnk.com/christophe/"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Christophe.png" alt="" class="christophe visage in-overlay"></a> -->
            <a href="https://helsnk.com/clement/"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Clement.png" alt="" class="clement visage in-overlay"></a>
            <a href="https://helsnk.com/jd/"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/J-D.png" alt="" class="jd visage in-overlay"></a>
            <a href="https://helsnk.com/jonathan/"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Jonathan.png" alt="" class="jonathan visage in-overlay"></a>
            <a href="https://helsnk.com/maryam/"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Maryam.png" alt="" class="maryam visage in-overlay"></a>
            <!--  <a href="https://helsnk.com/oumou/"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Oumou.png" alt="" class="oumou visage in-overlay"></a> -->
            <a href="https://helsnk.com/pascal/"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Pascal.png" alt="" class="pascal visage in-overlay"></a>
            <a href="https://helsnk.com/quentin/"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Quentin.png" alt="" class="quentin visage in-overlay"></a>
            <a href="https://helsnk.com/thibaut/"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Thibaut.png" alt="" class="thibaut visage in-overlay"></a>
            <a href="https://helsnk.com/wahib/"><img src="<?php echo get_template_directory_uri(); ?>/img-accueil/Wahib.png" alt="" class="wahib visage in-overlay"></a>
       
        </div>
        <footer>
            Footer
        </footer>
        <?php wp_footer(); ?>

    </body> 
</html>