<?php
register_block_pattern(
  'vogelsang-vts/it-services',
  array(
    'title'       => __('IT Services Page Layout', 'vogelsang-vts'),
    'description' => __('IT Services page layout matching the exact VentureTech website structure', 'vogelsang-vts'),
    'categories'  => array('layout'),
    'content'     => '<!-- wp:group {"align":"full","className":"bg-vts-primary text-white"} -->
<div class="wp-block-group alignfull bg-vts-primary text-white">

  <!-- wp:group {"className":"container mx-auto px-6 py-12 lg:py-16"} -->
  <div class="wp-block-group container mx-auto px-6 py-12 lg:py-16">
    <!-- wp:columns {"verticalAlignment":"center","className":"items-center gap-8 lg:gap-12"} -->
    <div class="wp-block-columns are-vertically-aligned-center items-center gap-8 lg:gap-12">
      <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
        <!-- wp:heading {"level":1,"className":"text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6"} -->
        <h1 class="wp-block-heading text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">IT Services</h1>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"className":"text-vts-muted text-base md:text-lg leading-relaxed mb-8"} -->
        <p class="text-vts-muted text-base md:text-lg leading-relaxed mb-8">U.S. businesses lose $20 billion each year to cyber-attacks, with 30,000 websites hacked daily—one every 39 seconds. Our specialists provide insights through reports and dashboards to improve decision-making. Our IT Infrastructure will use all of the following programs</p>
        <!-- /wp:paragraph -->
        
        <!-- Technology Tags -->
        <!-- wp:group {"className":"technology-tags"} -->
        <div class="wp-block-group technology-tags">
          <!-- wp:list {"className":"grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 text-center"} -->
          <ul class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 text-center">
            <!-- wp:list-item -->
            <li class="tech-tag">Ajax</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">ASP</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">.net</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">C#</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">XML-RPC</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">JSON</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">MVC</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">SOAP</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">REST</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">VB</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="tech-tag">Web Service Developers</li>
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
          <img src="' . esc_url(get_template_directory_uri() . '/assets/hero-alt-1.png') . '" alt="IT Services - Person thinking looking at screen with data"/>
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->


  <!-- Services Heading -->
  <div class="services-heading">
    <h2 class="services-title">/services</h2>
  </div>

  <!-- wp:group {"className":"container mx-auto px-6 py-12 it-services-layout"} -->
  <div class="wp-block-group container mx-auto px-6 py-12 it-services-layout">

    <!-- wp:group {"className":"left-services-group"} -->
    <div class="wp-block-group left-services-group">
      
      <!-- wp:group {"className":"service-card"} -->
      <div class="wp-block-group service-card">
        <!-- wp:group {"className":"flex items-center gap-4 mb-4"} -->
        <div class="wp-block-group flex items-center gap-4 mb-4">
          <!-- wp:html -->
          <div class="text-3xl p-3 bg-vts-primary rounded-lg text-vts-accent">
            <i class="fas fa-plug"></i>
          </div>
          <!-- /wp:html -->
        </div>
        <!-- /wp:group -->
        <!-- wp:heading {"level":3,"className":"text-xl font-semibold mb-3"} -->
        <h3 class="wp-block-heading text-xl font-semibold mb-3">Business Applications & Integration</h3>
        <!-- /wp:heading -->
        <!-- wp:list {"className":"text-vts-muted text-sm space-y-2"} -->
        <ul class="text-vts-muted text-sm space-y-2">
          <!-- wp:list-item --><li>Custom APIs</li><!-- /wp:list-item -->
          <!-- wp:list-item --><li>E-Commerce Solutions</li><!-- /wp:list-item -->
          <!-- wp:list-item --><li>Payment Gateways</li><!-- /wp:list-item -->
          <!-- wp:list-item --><li>SaaS Platforms</li><!-- /wp:list-item -->
          <!-- wp:list-item --><li>Accounting & Inventory Integrations</li><!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"className":"service-card"} -->
      <div class="wp-block-group service-card">
        <!-- wp:group {"className":"flex items-center gap-4 mb-4"} -->
        <div class="wp-block-group flex items-center gap-4 mb-4">
          <!-- wp:html -->
          <div class="text-3xl p-3 bg-vts-primary rounded-lg text-vts-accent">
            <i class="fas fa-phone"></i>
          </div>
          <!-- /wp:html -->
        </div>
        <!-- /wp:group -->
        <!-- wp:heading {"level":3,"className":"text-xl font-semibold mb-3"} -->
        <h3 class="wp-block-heading text-xl font-semibold mb-3">Intelligence & Optimization</h3>
        <!-- /wp:heading -->
        <!-- wp:list {"className":"text-vts-muted text-sm space-y-2"} -->
        <ul class="text-vts-muted text-sm space-y-2">
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

    <!-- wp:group {"className":"left-group-image"} -->
    <div class="wp-block-group left-group-image">
      <!-- wp:image {"className":"rounded-lg shadow-2xl w-full h-full object-cover"} -->
      <figure class="wp-block-image rounded-lg shadow-2xl w-full h-full object-cover">
        <img src="' . esc_url(get_template_directory_uri() . '/assets/it-services-hero-1.jpg') . '" alt="IT Services - Person in uniform"/>
      </figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"right-services-group"} -->
    <div class="wp-block-group right-services-group">
      
      <!-- wp:group {"className":"service-card"} -->
      <div class="wp-block-group service-card">
        <!-- wp:group {"className":"flex items-center gap-4 mb-4"} -->
        <div class="wp-block-group flex items-center gap-4 mb-4">
          <!-- wp:html -->
          <div class="text-3xl p-3 bg-vts-primary rounded-lg text-vts-accent">
            <i class="fas fa-server"></i>
          </div>
          <!-- /wp:html -->
        </div>
        <!-- /wp:group -->
        <!-- wp:heading {"level":3,"className":"text-xl font-semibold mb-3"} -->
        <h3 class="wp-block-heading text-xl font-semibold mb-3">Data & Systems Infrastructure</h3>
        <!-- /wp:heading -->
        <!-- wp:list {"className":"text-vts-muted text-sm space-y-2"} -->
        <ul class="text-vts-muted text-sm space-y-2">
          <!-- wp:list-item --><li>Data Warehousing</li><!-- /wp:list-item -->
          <!-- wp:list-item --><li>Database Administration</li><!-- /wp:list-item -->
          <!-- wp:list-item --><li>Enterprise Architecture</li><!-- /wp:list-item -->
          <!-- wp:list-item --><li>Virtualization</li><!-- /wp:list-item -->
          <!-- wp:list-item --><li>Telecommunication Systems</li><!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"className":"service-card"} -->
      <div class="wp-block-group service-card">
        <!-- wp:group {"className":"flex items-center gap-4 mb-4"} -->
        <div class="wp-block-group flex items-center gap-4 mb-4">
          <!-- wp:html -->
          <div class="text-3xl p-3 bg-vts-primary rounded-lg text-vts-accent">
            <i class="fas fa-shield-alt"></i>
          </div>
          <!-- /wp:html -->
        </div>
        <!-- /wp:group -->
        <!-- wp:heading {"level":3,"className":"text-xl font-semibold mb-3"} -->
        <h3 class="wp-block-heading text-xl font-semibold mb-3">Security & Compliance</h3>
        <!-- /wp:heading -->
        <!-- wp:list {"className":"text-vts-muted text-sm space-y-2"} -->
        <ul class="text-vts-muted text-sm space-y-2">
          <!-- wp:list-item --><li>Data Privacy Protection</li><!-- /wp:list-item -->
          <!-- wp:list-item --><li>PCI Compliance</li><!-- /wp:list-item -->
          <!-- wp:list-item --><li>System Monitoring & Risk Management</li><!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"className":"service-card"} -->
      <div class="wp-block-group service-card">
        <!-- wp:group {"className":"flex items-center gap-4 mb-4"} -->
        <div class="wp-block-group flex items-center gap-4 mb-4">
          <!-- wp:html -->
          <div class="text-3xl p-3 bg-vts-primary rounded-lg text-vts-accent">
            <i class="fas fa-chess"></i>
          </div>
          <!-- /wp:html -->
        </div>
        <!-- /wp:group -->
        <!-- wp:heading {"level":3,"className":"text-xl font-semibold mb-3"} -->
        <h3 class="wp-block-heading text-xl font-semibold mb-3">IT Strategy & Support</h3>
        <!-- /wp:heading -->
        <!-- wp:list {"className":"text-vts-muted text-sm space-y-2"} -->
        <ul class="text-vts-muted text-sm space-y-2">
          <!-- wp:list-item --><li>Custom IT Solutions</li><!-- /wp:list-item -->
          <!-- wp:list-item --><li>Technical Consulting</li><!-- /wp:list-item -->
          <!-- wp:list-item --><li>System Maintenance and Rollouts</li><!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group {"className":"service-card"} -->
      <div class="wp-block-group service-card">
        <!-- wp:group {"className":"flex items-center gap-4 mb-4"} -->
        <div class="wp-block-group flex items-center gap-4 mb-4">
          <!-- wp:html -->
          <div class="text-3xl p-3 bg-vts-primary rounded-lg text-vts-accent">
            <i class="fas fa-cloud"></i>
          </div>
          <!-- /wp:html -->
        </div>
        <!-- /wp:group -->
        <!-- wp:heading {"level":3,"className":"text-xl font-semibold mb-3"} -->
        <h3 class="wp-block-heading text-xl font-semibold mb-3">Backup & Recovery</h3>
        <!-- /wp:heading -->
        <!-- wp:list {"className":"text-vts-muted text-sm space-y-2"} -->
        <ul class="text-vts-muted text-sm space-y-2">
          <!-- wp:list-item --><li>Backup Strategies</li><!-- /wp:list-item -->
          <!-- wp:list-item --><li>Disaster Recovery</li><!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:group -->
      
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"right-group-image"} -->
    <div class="wp-block-group right-group-image">
      <!-- wp:image {"className":"rounded-lg shadow-2xl w-full h-full object-cover"} -->
      <figure class="wp-block-image rounded-lg shadow-2xl w-full h-full object-cover">
        <img src="' . esc_url(get_template_directory_uri() . '/assets/it-services-hero-2.jpg') . '" alt="IT Services - Person with digital interface"/>
      </figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->'
  )
);
?>
