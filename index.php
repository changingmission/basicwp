<?php get_header();?>
<div class="container">
<div class="row">
  <div class="col-md-6">
    <?php get_template_part('template-parts/home/animals');?>
  </div>
  <div class="col-md-6">
    <?php get_template_part('template-parts/home/flowers');?>
  </div>
</div>
  <div class="cat-title">Blog</div>
  <?php get_template_part('loop');?>
</div>
<?php get_footer();?>