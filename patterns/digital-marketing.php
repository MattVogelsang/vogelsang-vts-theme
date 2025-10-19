<?php
/**
 * Title: Digital Marketing Page Layout
 * Slug: vogelsang-vts/digital-marketing
 * Categories: layout
 * Description: Digital Marketing page layout matching the provided design
 */

register_block_pattern(
  'vogelsang-vts/digital-marketing',
  array(
    'title'       => __('Digital Marketing Page Layout', 'vogelsang-vts'),
    'description' => __('Digital Marketing page layout with hero section and services grid', 'vogelsang-vts'),
    'categories'  => array('layout'),
    'content'     => '<!-- wp:group {"align":"full","className":"bg-vts-primary text-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull bg-vts-primary text-white">

  <!-- Hero Section -->
  <!-- wp:group {"className":"container mx-auto px-6 py-12 lg:py-16"} -->
  <div class="wp-block-group container mx-auto px-6 py-12 lg:py-16">
    <!-- wp:columns {"verticalAlignment":"center","className":"items-center gap-8 lg:gap-12"} -->
    <div class="wp-block-columns are-vertically-aligned-center items-center gap-8 lg:gap-12">
      <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
        <!-- wp:heading {"level":1,"className":"text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6"} -->
        <h1 class="wp-block-heading text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">Digital Marketing</h1>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"className":"text-vts-muted text-base md:text-lg leading-relaxed mb-8"} -->
        <p class="text-vts-muted text-base md:text-lg leading-relaxed mb-8">Our digital marketing specialists are skilled at creating and managing comprehensive digital marketing strategies that drive results. We help businesses establish a strong online presence and connect with their target audience through data-driven approaches.</p>
        <!-- /wp:paragraph -->
        
        <!-- Technology Tags -->
        <!-- wp:group {"className":"technology-tags"} -->
        <div class="wp-block-group technology-tags">
          <!-- wp:list {"className":"grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 text-center"} -->
          <ul class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 text-center">
            <!-- wp:list-item -->
            <li class="tech-tag">CMS</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">Adobe Suite Platform</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">ASP</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">MVC</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">Bootstrap</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">Google Analytics</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">HTML</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">Google Tag Manager</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">PHP</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">WordPress</li>
            <!-- /wp:list-item -->
          </ul>
          <!-- /wp:list -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->
      <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
        <!-- wp:image {"className":"rounded-lg shadow-2xl w-full"} -->
        <figure class="wp-block-image rounded-lg shadow-2xl w-full">
          <img src="' . esc_url(get_template_directory_uri() . '/assets/digital-marketing-hero.jpg') . '" alt="Digital Marketing - Person with digital interface"/>
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->

  <!-- Services Section -->
  <!-- wp:group {"className":"container mx-auto px-6 py-12"} -->
  <div class="wp-block-group container mx-auto px-6 py-12">
    
    <!-- wp:heading {"level":2,"className":"text-2xl md:text-3xl font-semibold mb-8 text-center"} -->
    <h2 class="wp-block-heading text-2xl md:text-3xl font-semibold mb-8 text-center">/ Services</h2>
    <!-- /wp:heading -->
    
    <!-- Services Grid Layout -->
    <!-- wp:group {"className":"digital-marketing-services"} -->
    <div class="wp-block-group digital-marketing-services">
      
      <!-- Left Column Services -->
      <!-- wp:group {"className":"left-services-column"} -->
      <div class="wp-block-group left-services-column">
        
        <!-- Landing Pages/Micro Sites -->
        <!-- wp:group {"className":"service-card"} -->
        <div class="wp-block-group service-card">
          <!-- wp:group {"className":"flex items-center gap-4 mb-4"} -->
          <div class="wp-block-group flex items-center gap-4 mb-4">
            <!-- wp:html -->
            <div class="service-icon">
              <i class="fas fa-file-alt"></i>
            </div>
            <!-- /wp:html -->
          </div>
          <!-- /wp:group -->
          <!-- wp:heading {"level":3,"className":"text-xl font-semibold mb-3"} -->
          <h3 class="wp-block-heading text-xl font-semibold mb-3">Landing Pages/Micro Sites</h3>
          <!-- /wp:heading -->
          <!-- wp:paragraph {"className":"text-vts-muted text-sm"} -->
          <p class="text-vts-muted text-sm">Create targeted landing pages and micro sites that convert visitors into customers with optimized user experience and compelling calls-to-action.</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- Social Media Marketing -->
        <!-- wp:group {"className":"service-card"} -->
        <div class="wp-block-group service-card">
          <!-- wp:group {"className":"flex items-center gap-4 mb-4"} -->
          <div class="wp-block-group flex items-center gap-4 mb-4">
            <!-- wp:html -->
            <div class="service-icon">
              <i class="fas fa-share-alt"></i>
            </div>
            <!-- /wp:html -->
          </div>
          <!-- /wp:group -->
          <!-- wp:heading {"level":3,"className":"text-xl font-semibold mb-3"} -->
          <h3 class="wp-block-heading text-xl font-semibold mb-3">Social Media Marketing</h3>
          <!-- /wp:heading -->
          <!-- wp:paragraph {"className":"text-vts-muted text-sm"} -->
          <p class="text-vts-muted text-sm">Craft engaging social media strategies that build brand awareness, drive traffic, and foster meaningful connections with your audience across all platforms.</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- Lead Tracking Systems -->
        <!-- wp:group {"className":"service-card"} -->
        <div class="wp-block-group service-card">
          <!-- wp:group {"className":"flex items-center gap-4 mb-4"} -->
          <div class="wp-block-group flex items-center gap-4 mb-4">
            <!-- wp:html -->
            <div class="service-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <!-- /wp:html -->
          </div>
          <!-- /wp:group -->
          <!-- wp:heading {"level":3,"className":"text-xl font-semibold mb-3"} -->
          <h3 class="wp-block-heading text-xl font-semibold mb-3">Lead Tracking Systems</h3>
          <!-- /wp:heading -->
          <!-- wp:paragraph {"className":"text-vts-muted text-sm"} -->
          <p class="text-vts-muted text-sm">Implement comprehensive lead tracking and management systems that help you identify, nurture, and convert prospects into loyal customers.</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        
      </div>
      <!-- /wp:group -->

      <!-- Central Image -->
      <!-- wp:group {"className":"central-image"} -->
      <div class="wp-block-group central-image">
        <!-- wp:image {"className":"rounded-lg shadow-2xl w-full h-full object-cover"} -->
        <figure class="wp-block-image rounded-lg shadow-2xl w-full h-full object-cover">
          <img src="' . esc_url(get_template_directory_uri() . '/assets/digital-marketing-center.jpg') . '" alt="Digital Marketing - Social Media Strategy"/>
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:group -->

      <!-- Right Column Services -->
      <!-- wp:group {"className":"right-services-column"} -->
      <div class="wp-block-group right-services-column">
        
        <!-- Reporting Services & Analytics -->
        <!-- wp:group {"className":"service-card"} -->
        <div class="wp-block-group service-card">
          <!-- wp:group {"className":"flex items-center gap-4 mb-4"} -->
          <div class="wp-block-group flex items-center gap-4 mb-4">
            <!-- wp:html -->
            <div class="service-icon">
              <i class="fas fa-chart-bar"></i>
            </div>
            <!-- /wp:html -->
          </div>
          <!-- /wp:group -->
          <!-- wp:heading {"level":3,"className":"text-xl font-semibold mb-3"} -->
          <h3 class="wp-block-heading text-xl font-semibold mb-3">Reporting Services & Analytics</h3>
          <!-- /wp:heading -->
          <!-- wp:paragraph {"className":"text-vts-muted text-sm"} -->
          <p class="text-vts-muted text-sm">Provide comprehensive reporting and analytics services that help you understand your digital performance and make data-driven decisions.</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- Search Engine Optimization -->
        <!-- wp:group {"className":"service-card"} -->
        <div class="wp-block-group service-card">
          <!-- wp:group {"className":"flex items-center gap-4 mb-4"} -->
          <div class="wp-block-group flex items-center gap-4 mb-4">
            <!-- wp:html -->
            <div class="service-icon">
              <i class="fas fa-search"></i>
            </div>
            <!-- /wp:html -->
          </div>
          <!-- /wp:group -->
          <!-- wp:heading {"level":3,"className":"text-xl font-semibold mb-3"} -->
          <h3 class="wp-block-heading text-xl font-semibold mb-3">Search Engine Optimization</h3>
          <!-- /wp:heading -->
          <!-- wp:paragraph {"className":"text-vts-muted text-sm"} -->
          <p class="text-vts-muted text-sm">Enhance your online visibility and search rankings through strategic SEO practices that improve your website\'s performance in search results.</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- Site Optimization -->
        <!-- wp:group {"className":"service-card"} -->
        <div class="wp-block-group service-card">
          <!-- wp:group {"className":"flex items-center gap-4 mb-4"} -->
          <div class="wp-block-group flex items-center gap-4 mb-4">
            <!-- wp:html -->
            <div class="service-icon">
              <i class="fas fa-tachometer-alt"></i>
            </div>
            <!-- /wp:html -->
          </div>
          <!-- /wp:group -->
          <!-- wp:heading {"level":3,"className":"text-xl font-semibold mb-3"} -->
          <h3 class="wp-block-heading text-xl font-semibold mb-3">Site Optimization</h3>
          <!-- /wp:heading -->
          <!-- wp:paragraph {"className":"text-vts-muted text-sm"} -->
          <p class="text-vts-muted text-sm">Boost your website\'s speed, performance, and user experience through comprehensive site optimization techniques and best practices.</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        
      </div>
      <!-- /wp:group -->
      
    </div>
    <!-- /wp:group -->
    
  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->'
  )
);
?>
