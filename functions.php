<?php
/**
 * VentureTech Solutions Theme Functions
 * Kinsta-compatible version
 */

// Theme setup
function vts_setup() {
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('wp-block-styles');
  add_theme_support('align-wide');
  add_theme_support('editor-styles');
  add_theme_support('responsive-embeds');
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'style',
    'script'
  ));
  
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
  
  // Check if compiled Tailwind CSS exists
  $compiled_css_path = get_template_directory() . '/assets/css/style.css';
  
  if (file_exists($compiled_css_path)) {
    // Use compiled Tailwind CSS
    wp_enqueue_style(
      'vts-tailwind',
      get_template_directory_uri() . '/assets/css/style.css',
      array(),
      '1.3.9'
    );
  } else {
    // Fallback to CDN
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
    '1.0.0'
  );
  
  // Theme JavaScript
  $js_path = get_template_directory() . '/src/main.js';
  if (file_exists($js_path)) {
    wp_enqueue_script(
      'vts-main',
      get_template_directory_uri() . '/src/main.js',
      array(),
      '1.0.0',
      true
    );
  }
}
add_action('wp_enqueue_scripts', 'vts_assets');

// Add editor styles
add_action('admin_init', function() {
  add_editor_style('style.css');
  
  $compiled_css_path = get_template_directory() . '/assets/css/style.css';
  if (file_exists($compiled_css_path)) {
    add_editor_style('assets/css/style.css');
  }
});

// Register block patterns
add_action('init', function() {
  $patterns_dir = get_template_directory() . '/patterns';
  if (is_dir($patterns_dir)) {
    foreach (glob($patterns_dir . '/*.php') as $file) {
      if (file_exists($file)) {
        require $file;
      }
    }
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
