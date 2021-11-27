<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif ?>
    <?php wp_head(); ?>
    <title><?php bloginfo('name');
            wp_title(); ?></title>
</head>

<body <?php body_class(); ?>>
    <div class="container-fluied">
        <div class="row">
            <div class="col-xs-12">
                <div class="header-container text-center background-image" style="background-image: url(<?php header_image(); ?>);">
                    <div class="header-content ">
                        <div class="site-title"><?php bloginfo('title'); ?></div>
                        <div class="site-description"><?php bloginfo('description'); ?></div>
                    </div>
                    <div class="nav-container">
                        <nav class="navbar navbar-default navbar-herhesh">
                            <?php
                            wp_nav_menu([
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => 'nav navbar-nav'
                            ]);
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>