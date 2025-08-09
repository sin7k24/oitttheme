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
            <!-- <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1> -->
            <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            <?php bloginfo('description'); ?>
        </div>
    </header>

    <nav class="site-navigation">
        <ul>
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li><a href="/カテゴリ一覧">Category</a></li>
            <li><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Sitemap</a></li>
            <li><a href="<?php echo home_url(); ?>">Contact</a></li>
        </ul>
    </nav>