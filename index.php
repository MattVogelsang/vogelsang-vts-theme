<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 */

get_header();
?>

<?php 
// Remove container for pages to allow full-width layouts
$container_class = is_page() ? '' : 'container mx-auto px-6 py-12';
?>

<div class="<?php echo esc_attr($container_class); ?> min-h-[60vh]">
  
  <?php if (have_posts()) : ?>
    
    <div class="space-y-12">
      
      <?php while (have_posts()) : the_post(); ?>
        
        <?php 
        // Remove styling for pages to allow full-width block layouts
        $article_class = is_page() ? '' : 'bg-vts-panel rounded-lg p-6 md:p-8';
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class($article_class); ?>>
          
          <?php if (!is_page()) : // Hide header for pages ?>
          <header class="entry-header mb-6">
            <?php
            if (is_singular()) :
              the_title('<h1 class="entry-title text-3xl md:text-4xl font-bold mb-4">', '</h1>');
            else :
              the_title('<h2 class="entry-title text-2xl md:text-3xl font-bold mb-4"><a href="' . esc_url(get_permalink()) . '" rel="bookmark" class="hover:text-vts-accent transition-colors">', '</a></h2>');
            endif;
            ?>
            
            <?php if ('post' === get_post_type()) : ?>
              <div class="entry-meta text-sm text-vts-muted flex flex-wrap gap-4">
                <span class="posted-on">
                  <i class="far fa-calendar"></i>
                  <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                    <?php echo esc_html(get_the_date()); ?>
                  </time>
                </span>
                <span class="byline">
                  <i class="far fa-user"></i>
                  <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="hover:text-white transition-colors">
                    <?php echo esc_html(get_the_author()); ?>
                  </a>
                </span>
                <?php if (has_category()) : ?>
                  <span class="cat-links">
                    <i class="far fa-folder"></i>
                    <?php the_category(', '); ?>
                  </span>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </header>
          <?php endif; // End hide header for pages ?>
          
          <?php if (has_post_thumbnail() && !is_singular()) : ?>
            <div class="entry-thumbnail mb-6">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('large', array('class' => 'rounded-lg w-full h-auto')); ?>
              </a>
            </div>
          <?php endif; ?>
          
          <div class="entry-content prose prose-invert max-w-none">
            <?php
            if (is_singular()) {
              the_content();
            } else {
              the_excerpt();
              echo '<p class="mt-4"><a href="' . esc_url(get_permalink()) . '" class="inline-block px-6 py-2 bg-vts-accent text-white rounded-lg hover:bg-vts-accent/90 transition-colors">' . esc_html__('Read More', 'vogelsang-vts') . ' →</a></p>';
            }
            
            wp_link_pages(array(
              'before' => '<div class="page-links mt-6">' . esc_html__('Pages:', 'vogelsang-vts'),
              'after'  => '</div>',
            ));
            ?>
          </div>
          
          <?php if (is_singular() && has_tag()) : ?>
            <footer class="entry-footer mt-6 pt-6 border-t border-vts-primary">
              <div class="tags-links text-sm text-vts-muted">
                <i class="fas fa-tags"></i>
                <?php the_tags('', ', ', ''); ?>
              </div>
            </footer>
          <?php endif; ?>
          
        </article>
        
      <?php endwhile; ?>
      
    </div>
    
    <?php
    // Pagination
    the_posts_pagination(array(
      'mid_size'  => 2,
      'prev_text' => __('← Previous', 'vogelsang-vts'),
      'next_text' => __('Next →', 'vogelsang-vts'),
      'class'     => 'mt-12',
    ));
    ?>
    
  <?php else : ?>
    
    <div class="no-results bg-vts-panel rounded-lg p-8 md:p-12 text-center">
      <h1 class="text-3xl font-bold mb-4"><?php esc_html_e('Nothing Found', 'vogelsang-vts'); ?></h1>
      <p class="text-vts-muted mb-6"><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with different keywords.', 'vogelsang-vts'); ?></p>
      <?php get_search_form(); ?>
    </div>
    
  <?php endif; ?>
  
</div>

<?php
get_footer();
