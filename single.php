<?php get_header();?>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <?php while(have_posts()): the_post();?>
          <div class="post-entry">
            <h1><?php the_title();?></h1>
            <?php the_content();?>
          </div>
        <?php endwhile; wp_reset_postdata();?>
      </div>
      <div class="col-md-4">
        <?php get_sidebar();?>
      </div>
    </div>
  </div>
  <!-- .container -->
<?php get_footer();?>