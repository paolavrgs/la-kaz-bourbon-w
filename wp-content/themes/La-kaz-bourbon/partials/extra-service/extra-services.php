  <!-- Extra services -->
  <div class="extra-services">
    <p>Lorem ipsum dolor sit amet, consectetus adipiscing elit. Phasellus quis ligula nisl. Integer leo odio, fermentum et consequat quis, ullamcorper sit amet arcu. Aliquam vestibulum efficitur ante, sit amet pharetra eros hendrerit facilisis. Phasellus sit amet nisl in massa eleifend rhoncus. Donec a porttitor diam, eget blandit felis.</p>
    <div class="extra-services-grid">

      <?php $args = array('post_type' => 'ExtraServices'); ?>
      <?php $loop = new WP_Query($args); ?>
      <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="extra-service-item">
          <img alt="<?php the_title(); ?>"  src="<?php echo get_the_post_thumbnail_url(); ?>">
          <div class="extra-service-item-text">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>