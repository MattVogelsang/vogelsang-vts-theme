<?php
/* Template Name: Home Page */
get_header(); ?>
<main class="bg-vts-primary">
  <?php while(have_posts()): the_post(); the_content(); endwhile; ?>
</main>
<?php get_footer(); ?>
