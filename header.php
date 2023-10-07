<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo( 'title' );?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- header sectoin -->
    <header>
        <div class="top-bar">
            <div class="social-medias">
               <?php get_sidebar('social'); ?>
            </div>
            <div class="search-bar">
                <?php get_search_form(); ?>
            </div>
        </div>
        <div class="bottom-bar">
            <div class="logo">
                <h1><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></h1>
            </div>
            <div class="navigation">
                <?php wp_nav_menu(array('theme_location' => 'blogtheme_main_menu', 'depth' => 2, 'menu_class' => 'nav-menu' , 'container' => '<nav></nav>' ))?>
            </div>
        </div>
    </header>