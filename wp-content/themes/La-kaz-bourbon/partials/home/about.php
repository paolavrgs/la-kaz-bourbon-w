<!-- About -->
<div class="home-about">
  <div class="home-about-card">
    <div class="home-about-card-img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home_about_bg.jpg">
      <img class="play" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/about_play.svg">
    </div>
    <div class="home-about-card-text">
      <h4><?php _e('DISCOVER LA KAZ BOURBON!', 'apk'); ?></h4>
      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio. Vivamus euismod vulputate metus.</p> -->
      <?php 
      $lang = get_bloginfo('language');
      /* Aleman */
      if( $lang == 'de-DE'): ?>
        <a class="btn btn-custom inverse" href="<?php bloginfo( 'url' ); ?>/uber-uns">ÜBER UNS</a>
      <!-- Espanol -->
      <?php elseif( $lang == 'es' ): ?>
        <a class="btn btn-custom inverse" href="<?php bloginfo( 'url' ); ?>/sobre-nosotros">SOBRE NOSOTROS</a>
      <!-- Holandes -->
      <?php elseif( $lang == 'nl' ): ?>
        <a class="btn btn-custom inverse" href="<?php bloginfo( 'url' ); ?>/over-ons">OVER ONS</a>
      <!-- Ruso -->
      <?php elseif( $lang == 'ru-RU' ): ?>
        <a class="btn btn-custom inverse" href="<?php bloginfo( 'url' ); ?>/о-нас">О НАС</a>
      <!-- INgles -->
      <?php else: ?>
        <a class="btn btn-custom inverse" href="<?php bloginfo( 'url' ); ?>/about">ABOUT US</a>
    <?php endif; ?>
    </div>
  </div>
</div>
