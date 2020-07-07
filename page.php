<?php get_header();?>
<div class="container">
  <?php while(have_posts()): the_post();?>
  <div class="post-entry">
    <h1><?php the_title();?></h1>
    <?php the_content();?>
  </div>
  <?php endwhile; wp_reset_postdata();?>
</div>
<?php get_footer();?>