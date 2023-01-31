<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

</head>
<body style="background:<?php echo Kirki::get_option('atc_theme_kirki_fields', 'atc_background_color') ?>">

<header>
<div class="container desktop-nav-wrapper">
    <div class="row">
        <div class="col-1"><img class="atc-logo" src="<?php echo Kirki::get_option('atc_theme_kirki_fields', 'atc_top_logo') ?>" alt="logo" /></div>
        <div class="col-8 atc-desktop-nav">
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location'    =>  'top-menu',
                        'menu_class'        =>  'atc-top-menu'
                    )
                )
            ?>
        </div>
        <div class="col-3 atc-desktop-nav">
            <div class="atc-phone-box" style="background:<?php echo Kirki::get_option('atc_theme_kirki_fields', 'atc_accent_color') ?>">
            <i class="fa-solid fa-phone-volume"></i>
            <?php echo Kirki::get_option('atc_theme_kirki_fields', 'atc_phone_number') ?>
            </div>
        </div>
        <div class="col-11 atc-mobile-nav text-right">
        <i id="atc-mobile-switch" class="fa-solid fa-bars"></i>
        </div>
    </div>
</div>
<div class="container atc-hero">
    <div class="row">
        <div class="col-md-6">
            <h1><?php echo Kirki::get_option('atc_theme_kirki_fields', 'atc_header_title') ?></h1>
            <h3><?php echo Kirki::get_option('atc_theme_kirki_fields', 'atc_header_textarea') ?></h3>
            <div class="atc-hero-buttons">
                <a href="<?php echo Kirki::get_option('atc_theme_kirki_fields', 'atc_header_button_link01') ?>" class="atc-btn atc-btn-red"><?php echo Kirki::get_option('atc_theme_kirki_fields', 'atc_header_button_text01') ?></a>
                <a href="<?php echo Kirki::get_option('atc_theme_kirki_fields', 'atc_header_button_link02') ?>" class="atc-btn atc-btn-trans"><?php echo Kirki::get_option('atc_theme_kirki_fields', 'atc_header_button_text02') ?></a>
            </div>            
        </div>
        <div class="col-md-6">
            <div class="embed-youtube">
                <iframe width="560" height="315" src="<?php echo Kirki::get_option('atc_theme_kirki_fields', 'atc_header_video') ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
</header>
<div class="header-right-bkg">
    <div class="bkg-overlay"></div>
</div>
<div id="atc-mobile-menu" class="atc-mobile-menu">
<img class="atc-logo atc-logo-mobile" src="<?php echo Kirki::get_option('atc_theme_kirki_fields', 'atc_top_logo') ?>" alt="logo" />
    <div class="atc-mobile-close"><i class="fa-solid fa-xmark"></i></div>
<?php 
                wp_nav_menu(
                    array(
                        'theme_location'    =>  'mobile-menu',
                        'menu_class'        =>  'atc-mobile-menu-wrapper'
                    )
                )
            ?>
</div>
