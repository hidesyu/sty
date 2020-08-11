<?php
/*
Template Name: EACH-SERVICE
*/
?>
<?php get_header(); ?>

<main id="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; endif; ?>
</main><!--/#main-->

<!-- footer start -->
<?php get_footer(); ?>
