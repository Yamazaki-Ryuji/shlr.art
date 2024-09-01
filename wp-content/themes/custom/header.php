<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="art, artiste, peinture, sculpture, bordeaux" />
    <meta name="description" content="Les œuvres d'art d'Erelehys" />
    <title><?php bloginfo("name") ?> - <?php bloginfo("description") ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
    <?php wp_head(); ?>
</head>
<body>
    <div class="main-header">        
        <h1 class="site-name"><?php bloginfo("name") ?></h1>
    </div>
    <div class="navigation"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_couleur.png" alt="" class="logo">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <div class="mainmenu" id="myNavigation">
            <?php wp_nav_menu([
                    'theme_location' => 'menu_principal' 
            ]) ?>
        </div>        
    </div>