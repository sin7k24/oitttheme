<?php get_header(); ?>
<main>
    <header class="page-header">
        <h1>
            <?php
            global $wp_query;
            $search_count = $wp_query->found_posts;
            // 検索キーワードを取得して表示
            printf(
                esc_html__('「%s」の検索結果 %s件', 'text-domain'),
                '<span>' . get_search_query() . '</span>',
                $search_count
            );
            ?>
        </h1>
    </header>
    <div class="post-list">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                    <?php the_excerpt(); ?>
                </article>

            <?php endwhile; ?>

            <?php the_posts_pagination(); // ページネーションの表示 
            ?>
        <?php else : ?>
            <p>お探しのキーワードに一致する記事は見つかりませんでした。</p>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>