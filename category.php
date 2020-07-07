<?php get_header();?>
<div class="container">
  <div class="cat-title"><?php single_cat_title();?></div>
  <?php get_template_part('loop');?>
</div>
<?php get_footer();?>