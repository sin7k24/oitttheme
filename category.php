<?php get_header(); ?>

<main id="primary" class="site-main">

    <header class="page-header">
        <?php
        // カテゴリ名と説明を取得して表示
        the_archive_title( '<h1 class="page-title">', '</h1>' );
        the_archive_description( '<div class="archive-description">', '</div>' );
        ?>
    </header>

    <div class="post-list">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    
                    <div class="entry-meta">
                        <span class="posted-on">
                            <a href="<?php the_permalink(); ?>" rel="bookmark">
                                <time datetime="<?php echo the_time('c'); ?>">
                                    [<?php echo the_time('Y.m.d'); ?>] 
                                </time>
                            </a>
                        </span>
                        <span class="cat-links">
                            <?php the_category(', '); ?>
                        </span>
                    </div>
                    
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>

            <?php endwhile; ?>

            <?php the_posts_pagination(); ?>

        <?php else : ?>
            <p>このカテゴリには記事がありません。</p>
        <?php endif; ?>
    </div>

</main>

<?php get_footer(); ?>