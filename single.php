<?php get_header(); ?>
<main class="post-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h1 class="post-title"><?php the_title(); ?></h1>
            <div class="post-meta">
                <span><time datetime="<?php the_time('c'); ?>"><?php the_time('Y年m月d日'); ?></time></span>
                <span>カテゴリ：<?php the_category(', '); ?></span>
            </div>
            <div class="post-body">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile;
    endif; ?>

    <?php
    // 現在の投稿が属するカテゴリを取得
    $categories = get_the_category();

    if ($categories) {
        // 取得したカテゴリから、最初のカテゴリのIDを取得
        $category_ids = array();
        foreach ($categories as $category) {
            $category_ids[] = $category->term_id;
        }

        // 関連記事をクエリする設定
        $args = array(
            'post_type'      => 'post',               // 投稿タイプ
            'category__in'   => $category_ids,        // 同じカテゴリに属する記事
            'post__not_in'   => array(get_the_ID()),  // 現在の記事を除外
            'posts_per_page' => 5,                    // 表示する記事数
            'orderby'        => 'rand'                // ランダムに並び替え
        );

        // 新しいクエリを作成
        $related_posts = new WP_Query($args);

        // 関連記事が存在するか確認
        if ($related_posts->have_posts()) {
            echo '<div class="related-posts">';
            echo '<h3>関連記事</h3>';
            echo '<ul>';

            while ($related_posts->have_posts()) {
                $related_posts->the_post();
    ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </li>
    <?php
            }

            echo '</ul>';
            echo '</div>';
        }

        // クエリをリセットして、メインループに戻す
        wp_reset_postdata();
    }
    ?>
</main>
<?php get_footer(); ?>