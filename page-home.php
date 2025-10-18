<?php
/* Template Name: Home Page */
get_header(); ?>
<main class="bg-vts-primary">
  <div class="container mx-auto px-0">
    <?php while(have_posts()): the_post(); the_content(); endwhile; ?>
  </div>
</main>
<?php get_footer(); ?>
