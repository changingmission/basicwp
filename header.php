<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic WP</title>
  <?php wp_head();?>
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&autoLogAppEvents=1&version=v7.0&appId=195277767345505" nonce="A2DI9JXo"></script>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-sm-6">
      <?php if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
      }?>
    </div>
    <div class="col-md-8 col-sm-6">
      <?php dynamic_sidebar('logo-right');?>
    </div>
  </div>
  <?php get_template_part('nav');?>
</div>