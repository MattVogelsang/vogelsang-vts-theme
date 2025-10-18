<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class('bg-vts-primary text-white min-h-screen'); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'vogelsang-vts'); ?></a>

<header class="bg-vts-primary/95 backdrop-blur sticky top-0 z-50 border-b border-vts-panel/50 shadow-lg">
  <div class="container mx-auto">
    <div class="flex items-center justify-between py-4 px-6">
      
      <!-- Logo -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center gap-2 hover:opacity-90 transition-opacity" aria-label="<?php bloginfo('name'); ?> - Home">
        <img 
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/logo-light.png'); ?>" 
          class="h-8 md:h-10" 
          alt="<?php bloginfo('name'); ?>"
        >
      </a>
      
      <!-- Mobile Menu Toggle -->
      <button 
        id="mobile-menu-toggle" 
        class="md:hidden text-white text-2xl p-2 hover:text-vts-accent transition-colors focus:outline-none focus:ring-2 focus:ring-vts-accent rounded" 
        aria-label="Toggle navigation menu"
        aria-expanded="false"
      >
        <i class="fas fa-bars"></i>
      </button>
      
      <!-- Desktop Navigation -->
      <nav class="hidden md:block" aria-label="Primary navigation">
        <?php
          wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'flex items-center gap-6 lg:gap-8 text-sm font-medium',
            'fallback_cb'    => function() {
              echo '<ul class="flex items-center gap-6 lg:gap-8 text-sm font-medium">';
              echo '<li><a href="#" class="text-vts-muted hover:text-white transition-colors">IT Services</a></li>';
              echo '<li><a href="#" class="text-vts-muted hover:text-white transition-colors">Digital Marketing</a></li>';
              echo '<li><a href="#" class="text-vts-muted hover:text-white transition-colors">Career Opportunities</a></li>';
              echo '</ul>';
            },
            'link_before'    => '',
            'link_after'     => '',
          ]);
        ?>
      </nav>
      
    </div>
    
    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="md:hidden hidden px-6 pb-4 border-t border-vts-panel/50">
      <nav class="py-4" aria-label="Mobile navigation">
        <?php
          wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'flex flex-col gap-4 text-base',
            'fallback_cb'    => function() {
              echo '<ul class="flex flex-col gap-4 text-base">';
              echo '<li><a href="#" class="text-vts-muted hover:text-white transition-colors block py-2">IT Services</a></li>';
              echo '<li><a href="#" class="text-vts-muted hover:text-white transition-colors block py-2">Digital Marketing</a></li>';
              echo '<li><a href="#" class="text-vts-muted hover:text-white transition-colors block py-2">Career Opportunities</a></li>';
              echo '</ul>';
            },
          ]);
        ?>
      </nav>
    </div>
    
  </div>
</header>

<main id="primary" class="site-main">
