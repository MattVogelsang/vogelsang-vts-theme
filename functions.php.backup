<?php
/**
 * VentureTech Solutions Theme Functions
 */

// Theme setup
function vts_setup() {
  // Add default posts and comments RSS feed links to head
  add_theme_support('automatic-feed-links');
  
  // Let WordPress manage the document title
  add_theme_support('title-tag');
  
  // Enable support for Post Thumbnails on posts and pages
  add_theme_support('post-thumbnails');
  
  // Enable support for Block Styles
  add_theme_support('wp-block-styles');
  
  // Enable support for full and wide align images
  add_theme_support('align-wide');
  
  // Enable support for editor styles
  add_theme_support('editor-styles');
  
  // Enable support for responsive embeds
  add_theme_support('responsive-embeds');
  
  // Enable support for HTML5 markup
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'style',
    'script'
  ));
  
  // Register navigation menus
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'vogelsang-vts'),
  ));
}
add_action('after_setup_theme', 'vts_setup');

// Enqueue scripts and styles
function vts_assets() {
  // Google Fonts
  wp_enqueue_style(
    'vts-fonts',
    'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;600;700&display=swap',
    array(),
    null
  );
  
  // Font Awesome
  wp_enqueue_script(
    'fa-kit',
    'https://kit.fontawesome.com/77cccdd19e.js',
    array(),
    null,
    false
  );
  
  // Check if compiled Tailwind CSS exists, otherwise use CDN
  $compiled_css = get_template_directory() . '/assets/css/style.css';
  
  if (file_exists($compiled_css)) {
    // Use compiled Tailwind CSS
    wp_enqueue_style(
      'vts-tailwind',
      get_template_directory_uri() . '/assets/css/style.css',
      array(),
      filemtime($compiled_css)
    );
  } else {
    // Fallback to CDN (for development)
    wp_enqueue_script(
      'tailwind-cdn',
      'https://cdn.tailwindcss.com',
      array(),
      null,
      false
    );
    
    wp_add_inline_script(
      'tailwind-cdn',
      'tailwind.config = {
        theme: {
          extend: {
            colors: {
              "vts-primary": "#071a2b",
              "vts-panel": "#0d2940",
              "vts-accent": "#0d5a8a",
              "vts-muted": "#9fb6c8"
            },
            fontFamily: {
              sans: ["IBM Plex Sans", "sans-serif"]
            }
          }
        }
      }',
      'after'
    );
  }
  
  // Theme main stylesheet
  wp_enqueue_style(
    'vts-style',
    get_stylesheet_uri(),
    array(),
    filemtime(get_stylesheet_directory() . '/style.css')
  );
  
  // Theme JavaScript
  wp_enqueue_script(
    'vts-main',
    get_template_directory_uri() . '/src/main.js',
    array(),
    filemtime(get_template_directory() . '/src/main.js'),
    true
  );
}
add_action('wp_enqueue_scripts', 'vts_assets');

// Add editor styles
add_action('admin_init', function() {
  add_editor_style('style.css');
  
  // Add compiled CSS to editor if it exists
  $compiled_css = get_template_directory() . '/assets/css/style.css';
  if (file_exists($compiled_css)) {
    add_editor_style('assets/css/style.css');
  }
});

// Register block patterns
add_action('init', function() {
  foreach (glob(get_template_directory() . '/patterns/*.php') as $file) {
    require $file;
  }
});

// Add custom image sizes
add_action('after_setup_theme', function() {
  add_image_size('vts-hero', 1920, 1080, true);
  add_image_size('vts-service', 800, 600, true);
});

// Customize excerpt length
function vts_excerpt_length($length) {
  return 30;
}
add_filter('excerpt_length', 'vts_excerpt_length');

// Customize excerpt more string
function vts_excerpt_more($more) {
  return '...';
}
add_filter('excerpt_more', 'vts_excerpt_more');
?>
