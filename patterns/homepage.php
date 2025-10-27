<?php
$image_url = esc_url(get_template_directory_uri() . '/assets/shutterstock_2256482287-2.png');

register_block_pattern(
  'vogelsang-vts/homepage',
  array(
    'title'       => __('Homepage Layout – VTS', 'vogelsang-vts'),
    'description' => __('Replica of VentureTech Solutions homepage using core blocks', 'vogelsang-vts'),
    'categories'  => array('layout'),
    'content'     => '<!-- wp:group {"align":"full","className":"bg-vts-primary text-white"} -->
<div class="wp-block-group alignfull bg-vts-primary text-white">

  <!-- wp:spacer {"height":"2rem"} -->
  <div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->

  <!-- Hero Section -->
  <!-- wp:group {"className":"container mx-auto px-6 py-12 lg:py-16"} -->
  <div class="wp-block-group container mx-auto px-6 py-12 lg:py-16">
    
    <!-- wp:columns {"verticalAlignment":"center","className":"items-center gap-8 lg:gap-12"} -->
    <div class="wp-block-columns are-vertically-aligned-center items-center gap-8 lg:gap-12">
      
      <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
        
        <!-- wp:heading {"level":1,"className":"text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6"} -->
        <h1 class="wp-block-heading text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">Excellence Excels.</h1>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"className":"text-vts-muted text-base md:text-lg leading-relaxed mb-4"} -->
        <p class="text-vts-muted text-base md:text-lg leading-relaxed mb-4">VentureTech Solutions is a full-service recruitment firm that connects top-tier talent with industry-leading companies worldwide. We partner with organizations to identify, recruit, and place exceptional candidates across a wide range of roles.</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"className":"text-vts-muted text-base md:text-lg leading-relaxed mb-8"} -->
        <p class="text-vts-muted text-base md:text-lg leading-relaxed mb-8">We specialize in Customer Service, Sales, Marketing, IT, Operations, and Finance, providing staffing solutions tailored to each client needs. Our mission is to elevate both talent and teams, delivering better outcomes through strategic recruitment partnerships.</p>
        <!-- /wp:paragraph -->
        
        <!-- Stats Cards -->
        <!-- wp:group {"className":"flex flex-wrap gap-4 mt-8"} -->
        <div class="wp-block-group flex flex-wrap gap-4 mt-8">
          
          <!-- wp:group {"className":"stat-card flex-1 min-w-[140px]","backgroundColor":"vts-panel"} -->
          <div class="wp-block-group stat-card flex-1 min-w-[140px] has-vts-panel-background-color has-background">
            <!-- wp:heading {"level":3,"className":"text-3xl font-bold mb-1"} -->
            <h3 class="wp-block-heading text-3xl font-bold mb-1">100+</h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"className":"text-sm text-vts-muted"} -->
            <p class="text-sm text-vts-muted">sites managed</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
          
          <!-- wp:group {"className":"stat-card flex-1 min-w-[140px]","backgroundColor":"vts-panel"} -->
          <div class="wp-block-group stat-card flex-1 min-w-[140px] has-vts-panel-background-color has-background">
            <!-- wp:heading {"level":3,"className":"text-3xl font-bold mb-1"} -->
            <h3 class="wp-block-heading text-3xl font-bold mb-1">145%</h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"className":"text-sm text-vts-muted"} -->
            <p class="text-sm text-vts-muted">increase in leads</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
          
          <!-- wp:group {"className":"stat-card flex-1 min-w-[140px]","backgroundColor":"vts-panel"} -->
          <div class="wp-block-group stat-card flex-1 min-w-[140px] has-vts-panel-background-color has-background">
            <!-- wp:heading {"level":3,"className":"text-3xl font-bold mb-1"} -->
            <h3 class="wp-block-heading text-3xl font-bold mb-1">30</h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"className":"text-sm text-vts-muted"} -->
            <p class="text-sm text-vts-muted">years of service</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
          
        </div>
        <!-- /wp:group -->
        
      </div>
      <!-- /wp:column -->
      
      <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
        <!-- wp:image {"className":"rounded-lg shadow-2xl w-full"} -->
        <figure class="wp-block-image rounded-lg shadow-2xl w-full">
          <img src="' . $image_url . '" alt="Data visualization representing technology excellence"/>
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:column -->
      
    </div>
    <!-- /wp:columns -->
    
  </div>
  <!-- /wp:group -->
  
  <!-- wp:spacer {"height":"3rem"} -->
  <div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->
  
  <!-- Services Section -->
  <!-- wp:group {"className":"container mx-auto px-6 pb-16"} -->
  <div class="wp-block-group container mx-auto px-6 pb-16">
    
    <!-- wp:heading {"level":2,"className":"section-heading text-2xl md:text-3xl font-semibold mb-8"} -->
    <h2 class="wp-block-heading section-heading text-2xl md:text-3xl font-semibold mb-8">/ Services</h2>
    <!-- /wp:heading -->
    
    <!-- wp:columns {"className":"grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8"} -->
    <div class="wp-block-columns grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
      
      <!-- IT Services Card -->
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:group {"className":"service-card h-full flex flex-col"} -->
        <div class="wp-block-group service-card h-full flex flex-col">
          
          <!-- wp:group {"className":"flex items-center gap-4 mb-4"} -->
          <div class="wp-block-group flex items-center gap-4 mb-4">
            <!-- wp:image {"className":"w-12 h-12 p-3 rounded-lg","style":{"backgroundColor":"#6A6B7D"}} -->
            <figure class="wp-block-image w-12 h-12 p-3 rounded-lg" style="background-color:#6A6B7D">
              <img src="' . esc_url(get_template_directory_uri() . '/assets/chip.png') . '" alt="IT Services Icon" class="w-full h-full object-contain"/>
            </figure>
            <!-- /wp:image -->
          </div>
          <!-- /wp:group -->
          
          <!-- wp:heading {"level":3,"className":"text-xl font-semibold mb-3"} -->
          <h3 class="wp-block-heading text-xl font-semibold mb-3">IT Services</h3>
          <!-- /wp:heading -->
          
          <!-- wp:paragraph {"className":"text-vts-muted text-sm leading-relaxed mb-4 flex-grow"} -->
          <p class="text-vts-muted text-sm leading-relaxed mb-4 flex-grow">We are skilled at managing large networks with varying hardware and software needs with modular building blocks that can be easily moved and shifted as business requirements evolve.</p>
          <!-- /wp:paragraph -->
          
          <!-- wp:paragraph {"className":"mt-auto text-right"} -->
          <p class="mt-auto text-right"><a href="#" class="text-vts-muted hover:text-white transition-colors text-sm font-medium">Learn More</a></p>
          <!-- /wp:paragraph -->
          
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->
      
      <!-- Digital Marketing Card -->
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:group {"className":"service-card h-full flex flex-col"} -->
        <div class="wp-block-group service-card h-full flex flex-col">
          
          <!-- wp:group {"className":"flex items-center gap-4 mb-4"} -->
          <div class="wp-block-group flex items-center gap-4 mb-4">
            <!-- wp:image {"className":"w-12 h-12 p-3 rounded-lg","style":{"backgroundColor":"#6A6B7D"}} -->
            <figure class="wp-block-image w-12 h-12 p-3 rounded-lg" style="background-color:#6A6B7D">
              <img src="' . esc_url(get_template_directory_uri() . '/assets/chart.png') . '" alt="Digital Marketing Icon" class="w-full h-full object-contain"/>
            </figure>
            <!-- /wp:image -->
          </div>
          <!-- /wp:group -->
          
          <!-- wp:heading {"level":3,"className":"text-xl font-semibold mb-3"} -->
          <h3 class="wp-block-heading text-xl font-semibold mb-3">Digital Marketing</h3>
          <!-- /wp:heading -->
          
          <!-- wp:paragraph {"className":"text-vts-muted text-sm leading-relaxed mb-4 flex-grow"} -->
          <p class="text-vts-muted text-sm leading-relaxed mb-4 flex-grow">Creating innovative responsive designs for companies who want to have a strong online presence that helps increase conversion rates to effectively grow a business is what our highly skilled team does daily.</p>
          <!-- /wp:paragraph -->
          
          <!-- wp:paragraph {"className":"mt-auto text-right"} -->
          <p class="mt-auto text-right"><a href="#" class="text-vts-muted hover:text-white transition-colors text-sm font-medium">Learn More</a></p>
          <!-- /wp:paragraph -->
          
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->
      
      <!-- Career Opportunities Card -->
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:group {"className":"service-card h-full flex flex-col"} -->
        <div class="wp-block-group service-card h-full flex flex-col">
          
          <!-- wp:group {"className":"flex items-center gap-4 mb-4"} -->
          <div class="wp-block-group flex items-center gap-4 mb-4">
            <!-- wp:image {"className":"w-12 h-12 p-3 rounded-lg","style":{"backgroundColor":"#6A6B7D"}} -->
            <figure class="wp-block-image w-12 h-12 p-3 rounded-lg" style="background-color:#6A6B7D">
              <img src="' . esc_url(get_template_directory_uri() . '/assets/case.png') . '" alt="Career Opportunities Icon" class="w-full h-full object-contain"/>
            </figure>
            <!-- /wp:image -->
          </div>
          <!-- /wp:group -->
          
          <!-- wp:heading {"level":3,"className":"text-xl font-semibold mb-3"} -->
          <h3 class="wp-block-heading text-xl font-semibold mb-3">Career Opportunities</h3>
          <!-- /wp:heading -->
          
          <!-- wp:paragraph {"className":"text-vts-muted text-sm leading-relaxed mb-4 flex-grow"} -->
          <p class="text-vts-muted text-sm leading-relaxed mb-4 flex-grow">We have years of recruiting experience and have developed a customized recruitment methodology focused on connecting professionals who are looking for new opportunities to the companies looking to hire them.</p>
          <!-- /wp:paragraph -->
          
          <!-- wp:paragraph {"className":"mt-auto text-right"} -->
          <p class="mt-auto text-right"><a href="#" class="text-vts-muted hover:text-white transition-colors text-sm font-medium">Learn More</a></p>
          <!-- /wp:paragraph -->
          
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->
      
    </div>
    <!-- /wp:columns -->
    
  </div>
  <!-- /wp:group -->
  
  <!-- wp:spacer {"height":"2rem"} -->
  <div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->
  
</div>
<!-- /wp:group -->'
  )
);
?>
