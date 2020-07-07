<div class="cat-title">Animals</div>
<div class="card">
  <?php $args=array('cat'=>2,'showposts'=>4);
        $i=0; $result=new WP_Query($args); while($result->have_posts()): $result->the_post(); if($i++<1):?>
  <?php the_post_thumbnail();?>
  <div class="card-body">
    <h5 class="card-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
    <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(),30,'');?></p>
  </div>
  <ul class="list-group list-group-flush">
    <?php else:?>
    <li class="list-group-item"><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
    <?php endif; endwhile; wp_reset_postdata();?>
  </ul>
</div>