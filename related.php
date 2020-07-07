<div class="cat-title">Related</div>
<div class="row related">
  <?php $id=get_the_ID(); 
  $allcats=wp_get_post_categories($id); 
  $args=array('cat'=>array($allcats),'showposts'=>3,'post__not_in'=>array($id));
  $result=new WP_Query($args); while($result->have_posts()): $result->the_post();?>
  <div class="col-md-4">
    <div class="card h-100">
      <?php the_post_thumbnail('medium');?>
      <div class="card-body">
        <h5 class="card-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
      </div>
    </div>
  </div>
    <?php endwhile; wp_reset_postdata();?>
</div>