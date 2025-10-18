</main><!-- #primary -->

<footer class="bg-vts-primary text-vts-muted border-t border-vts-panel/50 mt-auto">
  <div class="container mx-auto px-6 py-10">
    
    <!-- Footer Content -->
    <div class="flex flex-col items-center text-center space-y-6 max-w-2xl mx-auto">
      
      <!-- Logo -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block hover:opacity-90 transition-opacity">
        <img 
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/logo-light.png'); ?>" 
          class="h-8" 
          alt="<?php bloginfo('name'); ?>"
        >
      </a>
      
      <!-- Contact Info -->
      <div class="text-sm space-y-2">
        <p>
          <a href="https://www.google.com/maps/search/?api=1&query=5787+West+Sunrise+Blvd+Plantation+FL+33313" 
             target="_blank" 
             rel="noopener noreferrer"
             class="hover:text-white transition-colors">
            5787 West Sunrise Blvd, Plantation, FL 33313
          </a>
        </p>
        <p>
          <a href="mailto:info@venturetechsolutions.com" class="hover:text-white transition-colors">
            info@venturetechsolutions.com
          </a>
        </p>
      </div>
      
      <!-- Footer Links -->
      <nav aria-label="Footer navigation" class="text-sm">
        <ul class="flex flex-wrap justify-center gap-1">
          <li><a href="#" class="hover:text-white transition-colors px-2">Privacy</a></li>
          <li class="text-vts-muted/50">|</li>
          <li><a href="#" class="hover:text-white transition-colors px-2">Terms of Use</a></li>
          <li class="text-vts-muted/50">|</li>
          <li><a href="#" class="hover:text-white transition-colors px-2">Accessibility</a></li>
        </ul>
      </nav>
      
      <!-- Copyright -->
      <div class="text-xs pt-4 border-t border-vts-panel/50 w-full">
        <p>&copy; <?php echo date('Y'); ?> VentureTech Solutions, LLC. All rights reserved.</p>
      </div>
      
    </div>
    
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
