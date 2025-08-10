<?php get_header(); ?>

<main id="primary" class="site-main">

    <header class="page-header">
        <?php
        // カテゴリ名と説明を取得して表示
        the_archive_title('<h1 class="page-title">', '</h1>');
        the_archive_description('<div class="archive-description">', '</div>');
        ?>
    </header>

    <div class="post-list">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <div class="post-meta">
                        <span><time datetime="<?php the_time('c'); ?>"><?php the_time('Y年m月d日'); ?></time></span>
                        <span>カテゴリ：<?php the_category(', '); ?></span>
                    </div>
                    <p><?php the_excerpt(); ?></p>
                </article>
            <?php endwhile; ?>

            <?php the_posts_pagination(); ?>

        <?php else : ?>
            <p>このカテゴリには記事がありません。</p>
        <?php endif; ?>
    </div>

</main>

<?php get_footer(); ?>