<?php get_header(); ?>
<main class="post-content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
      <h1 class="post-title"><?php the_title(); ?></h1>
      <div class="post-meta">
        <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
      </div>
      <div class="post-body">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>