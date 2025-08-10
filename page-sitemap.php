<?php
/* Template Name: サイトマップ */
get_header();
?>

<main>
    <h1>sitemap</h1>
    <!-- 固定ページを出す場合有効化
     <ul>
        <?php
        wp_list_pages(array(
            'title_li' => '',
            'exclude'  => '', // 除外したいページIDがあればここに
        ));
        ?>
    </ul> -->

    <?php
    $categories = get_categories(array(
        'orderby' => 'name',
        'order'   => 'ASC',
    ));

    foreach ($categories as $category) :
        $cat_posts = get_posts(array(
            'category'       => $category->term_id,
            'posts_per_page' => -1,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ));

        if ($cat_posts) :
    ?>
            <h3><?php echo esc_html($category->name); ?></h3>
            <ul>
                <?php foreach ($cat_posts as $post) : setup_postdata($post); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </ul>
    <?php endif;
    endforeach;
    ?>
</main>
<?php
get_footer();
?>