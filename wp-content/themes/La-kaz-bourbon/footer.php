<footer>
    <div class='footer-logo'>
      <img alt='La Kaz Bourbon' src='<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo-color-la-laz-bourbon.png'>
    </div>
    <div class='footer-menu'>
      <?php
        wp_nav_menu( array(
            'menu_class' => 'navbar-nav mb-2 mb-lg-0', 
            'menu_class_li' => 'nav-item', 

            'theme_location' => 'my-custom-menufooter', 
            'container_class' => 'menu',
            'link_before' => '<i class="bx bx-user-pin"></i>' ) ); 
        ?>
    </div>
    <div class='footer-contact'>
      <ul>
        <li><?php _e('La Réunion, France', 'apk'); ?></li>
        <li>
          <a href='mailto:'></a>
        </li>
        <li>
          <a href='tel:'></a>
        </li>
        <li><?php _e('8 AM - 6 PM (CET) ', 'apk'); ?></li>
      </ul>
      <ul class='rrss'>
        <li>
          <a href='#'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/fb.svg'>
          </a>
        </li>
        <li>
          <a href='#'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/ig.svg'>
          </a>
        </li>
        <li>
          <a href='#'>
            <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/youtube.svg'>
          </a>
        </li>
      </ul>
    </div>
    <div class='copyright'>
      <span>
        <?php _e('Copyright © 2020 La Kaz Bourbon', 'apk'); ?>        
        <a href=''><?php _e('Made with ♥ by Branch', 'apk'); ?></a>
      </span>
    </div>
  </footer>
  <div class='whatsapp-floating-btn'>
    <a href='#'>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/wpp-float-button.svg'>
    </a>
  </div>

  <style>
    .footer-menu .navbar-nav {
      display: flex;
      flex-direction: column;
      justify-content: start;
      align-items: start;
    }
    .footer-menu .menu-item {
        margin: 5px 0;
    }

  </style>

  <script src='https://use.fontawesome.com/70a3cb5d53.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/main.js'></script>
  <?php wp_footer(); ?>
</body>

</html>