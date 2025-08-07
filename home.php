<?php get_header(); ?>
  <main>
    <div class="post-list">
      <?php if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
          <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
            <p><?php the_excerpt(); ?></p>
          </article>
      <?php endwhile; endif; ?>Í
    </div>
    <div class="pagination">
      <?php the_posts_pagination( array(
        'mid_size'  => 1,
        'prev_text' => '«前へ',
        'next_text' => '次へ»',
        'screen_reader_text' => ' ',
      ) ); ?>
    </div>
  </main>

<?php get_footer(); ?>
