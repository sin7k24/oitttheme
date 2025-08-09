<?php get_header(); ?>
<main>
    <div class="search-bar">
        <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
            <input type="search" class="search-field" placeholder="キーワード検索" value="<?php echo get_search_query(); ?>" name="s" />
        </form>
    </div>

    <div class="post-list">
        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <article>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <span>更新日：<time datetime="<?php the_time('c'); ?>"><?php the_time('Y年m月d日'); ?></time></span>
                    <span>カテゴリ：<?php the_category(', '); ?></span>
                    <p><?php the_excerpt(); ?></p>
                </article>
        <?php endwhile;
        endif; ?>
    </div>

    <div class="pagination">
        <?php the_posts_pagination(array(
            'mid_size'  => 2,
            'prev_text' => '«前へ',
            'next_text' => '次へ»',
            'screen_reader_text' => ' ',
        )); ?>
    </div>
</main>

<?php get_footer(); ?>