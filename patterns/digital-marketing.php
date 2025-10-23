<?php
register_block_pattern(
  'vogelsang-vts/digital-marketing',
  array(
    'title'       => __('Digital Marketing Page Layout', 'vogelsang-vts'),
    'description' => __('Digital Marketing page layout with hero section and services grid', 'vogelsang-vts'),
    'categories'  => array('layout'),
    'content'     => '<!-- wp:group {"align":"full","className":"bg-vts-primary text-white"} -->
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
        <p class="text-vts-muted text-base md:text-lg leading-relaxed mb-8">At VentureTech Solutions, we enhance online visibility with responsive web design, optimized content, and effective digital marketing. Our specialists connect audiences to meet business goals. Our highly skilled professionals are well-versed in:</p>
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
          <p class="text-vts-muted text-sm">VentureTech Solutions creates numerous landing pages annually, featuring targeted messaging, appealing graphics, and strong conversion rates. Our microsites combine creative design with relevant information to meet specific marketing goals.</p>
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
          <p class="text-vts-muted text-sm">Crafting effective social media marketing strategies through API integration, lead generation, and branding is essential for success. We help you balance social media posting, create relevant content, and align with your advertising campaigns to engage potential and current clients.</p>
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
          <p class="text-vts-muted text-sm">Boost sales by using technology for forecasting, pipeline tracking, and contact management. We provide a clear overview of leads from creation to conversion, helping marketers make informed decisions and manage customer relationships effectively.</p>
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
          <p class="text-vts-muted text-sm">VentureTech Solutions offers tools that empower users to explore their data and create self-serve reports, dashboards, and visualizations. We integrate top analytics tools to provide insights on traffic, market research, A/B testing, and advertising campaigns, helping guide decisions for new developments.</p>
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
          <p class="text-vts-muted text-sm">VentureTech Solutions specializes in customizing websites with ethical techniques that enhance user guidance through advanced keyword intelligence. We consistently elevate sites to top search engine rankings while steering clear of risky black-hat methods.</p>
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
          <p class="text-vts-muted text-sm">VentureTech Solutions boosts your website\'s speed and performance by optimizing hosting, code, and content. We ensure smooth integration of media elements like videos while providing a great user experience on all devices.</p>
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
