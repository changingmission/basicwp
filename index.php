<?php get_header();?>
  <div class="container">
    <?php if(have_posts()): while(have_posts()): the_post();?>
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <?php the_post_thumbnail();?>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
              <p class="card-text">
                <?php echo wp_trim_words(get_the_excerpt(),30,'');?>
              </p>
              <p class="card-text">
                <small class="text-muted"><?php echo get_the_date();?></small>
              </p>
            </div>
          </div>
          <!-- .col-md-8 -->
        </div>
      </div>
  <?php endwhile; wp_reset_postdata(); endif;?>
  </div>
<?php get_footer();?>