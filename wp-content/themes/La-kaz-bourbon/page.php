<?php get_header(); ?>
  <?php if (is_page(21)  or is_page(31) or is_page(35) or is_page(33) or is_page(37)): ?>
  <?php get_template_part('partials/pageabout'); ?>
  <!-- Extra services -->
  <?php elseif (is_page(29)  or is_page(49) or is_page(51) or is_page(47) or is_page(53)): ?>
    <?php get_template_part('partials/pageextra-services'); ?>
    <!-- Extra Reviews -->
  <?php elseif (is_page(27)  or is_page(43) or is_page(45) or is_page(39) or is_page(41)): ?>
    <?php get_template_part('partials/pagereviews'); ?>
  <!-- Extra Destination -->
  <?php elseif (is_page(27)  or is_page(43) or is_page(45) or is_page(39) or is_page(41)): ?>
    <?php get_template_part('partials/pagedestination'); ?>
  <!-- Extra Contact -->
  <?php elseif (is_page(55)  or is_page(59) or is_page(57) or is_page(63) or is_page(61)): ?>
    <?php get_template_part('partials/pagecontact'); ?>
  <!-- Extra News -->
   <?php elseif (is_page(75)  or is_page(83) or is_page(77) or is_page(79) or is_page(81)): ?>
    <?php get_template_part('partials/pagewhats-happening-in-reuinon-island'); ?>
  <!-- Extra Term conditions -->
  <?php else: ?>
    <div class="page-content">
      <div class="page-content-section">
      <?php if( get_the_content() != NULL){ ?>
        <?php
                  // Include the page content template.
        /*  get_template_part( 'content', 'page' );*/
        the_content();

                  // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;           
        ?>  
      <?php } ?>
      </div>
    </div>
  
    <?php endif; ?>
<?php get_footer(); ?>

