<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div>
            <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            <span><?php bloginfo('description'); ?><span>
        </div>
    </header>

    <nav class="site-navigation">
        <ul>
            <li><a href="<?php echo home_url(); ?>">home</a></li>
            <li><a href="/sitemap">sitemap</a></li>
        </ul>
    </nav>