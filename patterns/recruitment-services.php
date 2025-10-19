<?php
/**
 * Title: Recruitment Services Page Layout
 * Slug: vogelsang-vts/recruitment-services
 * Categories: layout
 * Description: Recruitment Services page layout with hero section only
 */

register_block_pattern(
  'vogelsang-vts/recruitment-services',
  array(
    'title'       => __('Recruitment Services Page Layout', 'vogelsang-vts'),
    'description' => __('Recruitment Services page layout with hero section only', 'vogelsang-vts'),
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
        <h1 class="wp-block-heading text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">Recruitment Services</h1>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"className":"text-vts-muted text-base md:text-lg leading-relaxed mb-8"} -->
        <p class="text-vts-muted text-base md:text-lg leading-relaxed mb-8">We connect top-tier talent with industry-leading companies worldwide. Our recruitment specialists excel at identifying, recruiting, and placing exceptional candidates across a wide range of roles and industries.</p>
        <!-- /wp:paragraph -->
        
        <!-- Industry Specializations -->
        <!-- wp:group {"className":"industry-specializations"} -->
        <div class="wp-block-group industry-specializations">
          <!-- wp:list {"className":"grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 text-center"} -->
          <ul class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 text-center">
            <!-- wp:list-item -->
            <li class="industry-tag">Vision</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="industry-tag">Dental</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="industry-tag">401(k)</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="industry-tag">Company Matching</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="industry-tag">Long-term Disability</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="industry-tag">Short-term Disability</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="industry-tag">Paid Time Off & Holidays</li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="industry-tag">Health Insurance</li>
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
          <img src="' . esc_url(get_template_directory_uri() . '/assets/recruitment-hero.jpg') . '" alt="Recruitment Services - Professional networking and talent acquisition"/>
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->'
  )
);
?>
