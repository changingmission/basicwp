<?php get_header();?>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <?php while(have_posts()): the_post();?>
          <div class="post-entry">
            <h1><?php the_title();?></h1>
            <div class="post-meta">
              <div class="row">
                <div class="col-6">On: <?php the_date();?></div>
                <div class="col-6">By: <?php the_author();?></div>
              </div>
              <div class="row"><div class="col-12">
                <div class="addthis_inline_share_toolbox"></div>
              </div></div>
              <hr>
            </div>
            <?php the_content();?>
          </div>
          <div class="comment">
            <?php comments_template();?>
          </div>
          <div class="related">
            <?php get_template_part('related');?>
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