<?php
/**
 * Title: IT Services Page Layout
 * Slug: vogelsang-vts/it-services
 * Categories: layout
 * Description: IT Services page layout matching the exact VentureTech website structure
 */

register_block_pattern(
  'vogelsang-vts/it-services',
  array(
    'title'       => __('IT Services Page Layout', 'vogelsang-vts'),
    'description' => __('IT Services page matching the exact VentureTech website structure', 'vogelsang-vts'),
    'categories'  => array('layout'),
    'content'     => '<!-- wp:group {"align":"full","className":"bg-vts-primary text-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull bg-vts-primary text-white">

  <!-- Hero Section -->
  <!-- wp:group {"className":"container mx-auto px-6 py-12 lg:py-16"} -->
  <div class="wp-block-group container mx-auto px-6 py-12 lg:py-16">
    <!-- wp:columns {"verticalAlignment":"center","className":"items-center gap-8 lg:gap-12"} -->
    <div class="wp-block-columns are-vertically-aligned-center items-center gap-8 lg:gap-12">
      <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
        <!-- wp:heading {"level":1,"className":"text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6"} -->
        <h1 class="wp-block-heading text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">IT Services</h1>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"className":"text-vts-muted text-base md:text-lg leading-relaxed mb-8"} -->
        <p class="text-vts-muted text-base md:text-lg leading-relaxed mb-8">We are skilled at managing large networks with varying hardware and software needs with modular building blocks that can be easily moved and shifted as business requirements evolve.</p>
        <!-- /wp:paragraph -->
        
        <!-- Technology List -->
        <!-- wp:list {"className":"grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 text-center bubbleList desktop"} -->
        <ul class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 text-center bubbleList desktop">
          <!-- wp:list-item -->
          <li class="bubbleItem bg-vts-panel p-4 rounded-lg">Ajax</li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="bubbleItem bg-vts-panel p-4 rounded-lg">ASP</li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="bubbleItem bg-vts-panel p-4 rounded-lg">.NET</li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="bubbleItem bg-vts-panel p-4 rounded-lg">C#</li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="bubbleItem bg-vts-panel p-4 rounded-lg">XML-RPC</li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="bubbleItem bg-vts-panel p-4 rounded-lg">JSON</li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="bubbleItem bg-vts-panel p-4 rounded-lg">MVC</li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="bubbleItem bg-vts-panel p-4 rounded-lg">SOAP</li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="bubbleItem bg-vts-panel p-4 rounded-lg">REST</li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="bubbleItem bg-vts-panel p-4 rounded-lg">VB</li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="bubbleItem bg-vts-panel p-4 rounded-lg">Web Service Developers</li>
          <!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:column -->
      <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
        <!-- wp:image {"className":"rounded-lg shadow-2xl w-full hero desktop"} -->
        <figure class="wp-block-image rounded-lg shadow-2xl w-full hero desktop">
          <img src="' . esc_url(get_template_directory_uri() . '/assets/hero-alt-1.png') . '" alt="Person thinking looking at screen with data and information in front of him." style="border-bottom-left-radius:180px"/>
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
    <h2 class="wp-block-heading text-2xl md:text-3xl font-semibold mb-8 text-center">/Services</h2>
    <!-- /wp:heading -->
    
    <!-- Main Services Layout - Exact VentureTech Structure -->
    <!-- wp:group {"align":"full","className":"it-specialties flex card"} -->
    <div class="wp-block-group alignfull it-specialties flex card">
      
      <!-- Left Column: 2 Cards + Image -->
      <!-- wp:group {"className":"cards left-column"} -->
      <div class="wp-block-group cards left-column">
        
        <!-- Business Applications & Integration -->
        <!-- wp:group {"className":"card card-box mb-10"} -->
        <div class="wp-block-group card card-box mb-10">
          <!-- wp:columns {"className":"is-not-stacked-on-mobile"} -->
          <div class="wp-block-columns is-not-stacked-on-mobile">
            <!-- wp:column {"width":"30px"} -->
            <div class="wp-block-column" style="flex-basis:30px">
              <!-- wp:html -->
              <div class="icons">
                <i class="fas fa-plug text-vts-accent" style="font-size: 24px;"></i>
              </div>
              <!-- /wp:html -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
              <!-- wp:heading {"level":3,"className":"wp-block-heading"} -->
              <h3 class="wp-block-heading">Business Applications & Integration</h3>
              <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->
          </div>
          <!-- /wp:columns -->
          <!-- wp:list -->
          <ul class="wp-block-list">
            <!-- wp:list-item --><li>Custom APIs</li><!-- /wp:list-item -->
            <!-- wp:list-item --><li>E-Commerce Solutions</li><!-- /wp:list-item -->
            <!-- wp:list-item --><li>Payment Gateways</li><!-- /wp:list-item -->
            <!-- wp:list-item --><li>SaaS Platforms</li><!-- /wp:list-item -->
            <!-- wp:list-item --><li>Accounting, Shipping, and Inventory Integrations</li><!-- /wp:list-item -->
          </ul>
          <!-- /wp:list -->
        </div>
        <!-- /wp:group -->

        <!-- Intelligence & Optimization -->
        <!-- wp:group {"className":"card card-box mb-10"} -->
        <div class="wp-block-group card card-box mb-10">
          <!-- wp:columns {"className":"is-not-stacked-on-mobile"} -->
          <div class="wp-block-columns is-not-stacked-on-mobile">
            <!-- wp:column {"width":"30px"} -->
            <div class="wp-block-column" style="flex-basis:30px">
              <!-- wp:html -->
              <div class="icons">
                <i class="fas fa-phone text-vts-accent" style="font-size: 24px;"></i>
              </div>
              <!-- /wp:html -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
              <!-- wp:heading {"level":3,"className":"wp-block-heading"} -->
              <h3 class="wp-block-heading">Intelligence & Optimization</h3>
              <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->
          </div>
          <!-- /wp:columns -->
          <!-- wp:list -->
          <ul class="wp-block-list">
            <!-- wp:list-item --><li>Business Intelligence Tools</li><!-- /wp:list-item -->
            <!-- wp:list-item --><li>Real-Time Data Access</li><!-- /wp:list-item -->
            <!-- wp:list-item --><li>Operational Workflow Automation</li><!-- /wp:list-item -->
            <!-- wp:list-item --><li>Call Center Systems</li><!-- /wp:list-item -->
          </ul>
          <!-- /wp:list -->
        </div>
        <!-- /wp:group -->
        
      </div>
      <!-- /wp:group -->

      <!-- Left Image -->
      <!-- wp:group {"className":"cards desktop left-image"} -->
      <div class="wp-block-group cards desktop left-image">
        <!-- wp:image {"className":"card-image"} -->
        <figure class="wp-block-image card-image">
          <img src="' . esc_url(get_template_directory_uri() . '/assets/it-services-hero-1.jpg') . '" alt="Software,Coding,Hologram,And,Woman,On,Tablet,Thinking,Of,Data" style="border-radius:18px"/>
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:group -->

      <!-- Right Column: 4 Cards -->
      <!-- wp:group {"className":"cards right-column"} -->
      <div class="wp-block-group cards right-column">
        
        <!-- Data & Systems Infrastructure -->
        <!-- wp:group {"className":"card card-box mb-10"} -->
        <div class="wp-block-group card card-box mb-10">
          <!-- wp:columns {"className":"is-not-stacked-on-mobile"} -->
          <div class="wp-block-columns is-not-stacked-on-mobile">
            <!-- wp:column {"width":"30px"} -->
            <div class="wp-block-column" style="flex-basis:30px">
              <!-- wp:html -->
              <div class="icons">
                <i class="fas fa-server text-vts-accent" style="font-size: 24px;"></i>
              </div>
              <!-- /wp:html -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
              <!-- wp:heading {"level":3,"className":"wp-block-heading"} -->
              <h3 class="wp-block-heading">Data & Systems Infrastructure</h3>
              <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->
          </div>
          <!-- /wp:columns -->
          <!-- wp:list -->
          <ul class="wp-block-list">
            <!-- wp:list-item --><li>Data Warehousing</li><!-- /wp:list-item -->
            <!-- wp:list-item --><li>Database Administration</li><!-- /wp:list-item -->
            <!-- wp:list-item --><li>Enterprise Architecture</li><!-- /wp:list-item -->
            <!-- wp:list-item --><li>Virtualization</li><!-- /wp:list-item -->
            <!-- wp:list-item --><li>Telecommunication Systems</li><!-- /wp:list-item -->
          </ul>
          <!-- /wp:list -->
        </div>
        <!-- /wp:group -->

        <!-- Security & Compliance -->
        <!-- wp:group {"className":"card card-box mb-10"} -->
        <div class="wp-block-group card card-box mb-10">
          <!-- wp:columns {"className":"is-not-stacked-on-mobile"} -->
          <div class="wp-block-columns is-not-stacked-on-mobile">
            <!-- wp:column {"width":"30px"} -->
            <div class="wp-block-column" style="flex-basis:30px">
              <!-- wp:html -->
              <div class="icons">
                <i class="fas fa-shield-alt text-vts-accent" style="font-size: 24px;"></i>
              </div>
              <!-- /wp:html -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
              <!-- wp:heading {"level":3,"className":"wp-block-heading"} -->
              <h3 class="wp-block-heading">Security & Compliance</h3>
              <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->
          </div>
          <!-- /wp:columns -->
          <!-- wp:list -->
          <ul class="wp-block-list">
            <!-- wp:list-item --><li>Data Privacy Protection</li><!-- /wp:list-item -->
            <!-- wp:list-item --><li>PCI Compliance</li><!-- /wp:list-item -->
            <!-- wp:list-item --><li>System Monitoring & Risk Management</li><!-- /wp:list-item -->
          </ul>
          <!-- /wp:list -->
        </div>
        <!-- /wp:group -->

        <!-- IT Strategy & Support -->
        <!-- wp:group {"className":"card card-box mb-10"} -->
        <div class="wp-block-group card card-box mb-10">
          <!-- wp:columns {"className":"is-not-stacked-on-mobile"} -->
          <div class="wp-block-columns is-not-stacked-on-mobile">
            <!-- wp:column {"width":"30px"} -->
            <div class="wp-block-column" style="flex-basis:30px">
              <!-- wp:html -->
              <div class="icons">
                <i class="fas fa-chess text-vts-accent" style="font-size: 24px;"></i>
              </div>
              <!-- /wp:html -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
              <!-- wp:heading {"level":3,"className":"wp-block-heading"} -->
              <h3 class="wp-block-heading">IT Strategy & Support</h3>
              <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->
          </div>
          <!-- /wp:columns -->
          <!-- wp:list -->
          <ul class="wp-block-list">
            <!-- wp:list-item --><li>Custom IT Solutions</li><!-- /wp:list-item -->
            <!-- wp:list-item --><li>Technical Consulting</li><!-- /wp:list-item -->
            <!-- wp:list-item --><li>System Maintenance and Rollouts</li><!-- /wp:list-item -->
          </ul>
          <!-- /wp:list -->
        </div>
        <!-- /wp:group -->

        <!-- Backup & Recovery -->
        <!-- wp:group {"className":"card card-box mb-10"} -->
        <div class="wp-block-group card card-box mb-10">
          <!-- wp:columns {"className":"is-not-stacked-on-mobile"} -->
          <div class="wp-block-columns is-not-stacked-on-mobile">
            <!-- wp:column {"width":"30px"} -->
            <div class="wp-block-column" style="flex-basis:30px">
              <!-- wp:html -->
              <div class="icons">
                <i class="fas fa-cloud text-vts-accent" style="font-size: 24px;"></i>
              </div>
              <!-- /wp:html -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
              <!-- wp:heading {"level":3,"className":"wp-block-heading"} -->
              <h3 class="wp-block-heading">Backup & Recovery</h3>
              <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->
          </div>
          <!-- /wp:columns -->
          <!-- wp:list -->
          <ul class="wp-block-list">
            <!-- wp:list-item --><li>Backup Strategies</li><!-- /wp:list-item -->
            <!-- wp:list-item --><li>Disaster Recovery</li><!-- /wp:list-item -->
          </ul>
          <!-- /wp:list -->
        </div>
        <!-- /wp:group -->
        
      </div>
      <!-- /wp:group -->

      <!-- Right Image -->
      <!-- wp:group {"className":"cards right-image"} -->
      <div class="wp-block-group cards right-image">
        <!-- wp:image {"className":"card-image"} -->
        <figure class="wp-block-image card-image">
          <img src="' . esc_url(get_template_directory_uri() . '/assets/it-services-hero-2.jpg') . '" alt="Server,Room,,Laptop,And,Technician,People,For,Software,Management,,System" style="border-radius:18px"/>
        </figure>
        <!-- /wp:image -->
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
