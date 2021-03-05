<?php get_header(); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="news-container">
      <div class="new-title">
        <h1>“<?php the_title(); ?>”</h1>
        <p><?php the_time( 'F jS, Y' ); ?> - <?php the_category( ' ' ); ?>  by <?php the_author_posts_link(); ?></p>
      </div>
      <div class="new-image-cover">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>">
      </div>
      <div class="new-detail-grid">
        <div class="new-detail-content">
          <div class="new-share">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/share.svg">          
            <?php echo do_shortcode('[Sassy_Social_Share title="Share:"]') ?>
          </div>
          <div class="new-content">
            <?php the_content(); ?>
          </div>
          <div class="new-share">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/share.svg">          
              <?php echo do_shortcode('[Sassy_Social_Share title="Share:"]') ?>
          </div>
        </div>
        <div class="new-detail-related">
          <h5>Related Content</h5>
            <div class="new-related-list">
            <?php $args = array('post_type' => 'post', 'order' => 'ASC',); ?>
            <?php $loop = new WP_Query($args); ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
              <div class="new-related-item">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                <div class="new-related-text">
                  <h4>“<?php the_title(); ?>”</h4>
                </div>
              </div>
            <?php endwhile; ?>
            </div>
        </div>
      </div>
    </div>
  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  <?php get_footer(); ?>

  <script>
  /* Deleted share icons */
  $(".heateorSssSharingRound i[title='Reddit']").css('display','none');
  $(".heateorSssSharingRound i[title='Linkedin']").css('display','none');
  $(".heateorSssSharingRound i[title='MeWe']").css('display','none');
  $(".heateorSssSharingRound i[title='Mix']").css('display','none');
  $(".heateorSssSharingRound i[title='Whatsapp']").css('display','none');
  $(".heateorSssSharingRound i[title='More']").css('display','none');
  </script>