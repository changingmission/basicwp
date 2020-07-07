<div class="cat-title">Latest</div>
<div class="card">
<ul class="list-group list-group-flush">
  <?php $args=array('showposts'=>5);
      $result=new WP_Query($args); while($result->have_posts()): $result->the_post();?>
    <li class="list-group-item"><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
    <?php endwhile; wp_reset_postdata();?>
  </ul>
</div>