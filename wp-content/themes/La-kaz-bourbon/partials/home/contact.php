<!-- Contact -->
<div class="home-banner-contact">
  <div class="home-banner-contact-text">
    <h2><?php _e('How can we make your visit even more special?', 'apk'); ?></h2>
    <?php 
      $lang = get_bloginfo('language');
   
      /* Aleman */
      if( $lang == 'de-DE'): ?>
        <a class="btn btn-custom" href="<?php bloginfo( 'url' ); ?>/kontakt">KONTAKT</a>
      <!-- Espanol -->
      <?php elseif( $lang == 'es' ): ?>
        <a class="btn btn-custom" href="<?php bloginfo( 'url' ); ?>/contacto">CONTACTO</a>
      <!-- Holandes -->
      <?php elseif( $lang == 'nl' ): ?>
        <a class="btn btn-custom" href="<?php bloginfo( 'url' ); ?>/contact">CONTACT</a>
      <!-- Ruso -->
      <?php elseif( $lang == 'ru-RU' ): ?>
        <a class="btn btn-custom" href="<?php bloginfo( 'url' ); ?>/свяжитесь-с-нами">СВЯЖИТЕСЬ С НАМИ</a>
      <!-- INgles -->
      <?php else: ?>
        <a class="btn btn-custom" href="<?php bloginfo( 'url' ); ?>/contact-us">CONTACTS US</a>
    
    <?php endif; ?>
    
  </div>
</div>
