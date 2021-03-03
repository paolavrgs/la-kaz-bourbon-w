<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">

<head>
  <title>La Kaz Bourbon</title>
  <meta charset='UTF-8'>
  <meta content='width=device-width, initial-scale=1.0' name='viewport'>
  <meta content='ie=edge' http-equiv='X-UA-Compatible'>
  <meta content='#fff' name=' theme-color'>
  <meta content='' name='description'>
  <meta content='' name='keywords'>
  <meta content='website' property='og:type'>
  <meta content='' property='og:title'>
  <meta content='' property='og:description'>
  <meta content='' property='og:image'>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/animate/animate.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/slick/slick.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/slick/slick-theme.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/main.css' rel='stylesheet'>
  <?php wp_head(); ?>

</head>

<body>
  <div class='widget widget-scroll'>
    <form>
      <div class='input-group'>
        <span class='input-group-text'>
          <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/home-icon.svg'>
        </span>
        <input aria-label='Arrival date' class='form-control' onblur='(this.type=&#39;text&#39;)' onfocus='(this.type=&#39;date&#39;)' placeholder='Arrival date' type='text'>
      </div>
      <div class='input-group'>
        <label class='input-group-text'>
          <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/calendar-icon.svg'>
        </label>
        <select class='form-select'>
          <option disabled selected='selected'>Guests</option>
          <option value='1'>One</option>
          <option value='2'>Two</option>
          <option value='3'>Three</option>
        </select>

      </div>
      <div class='input-group'>
        <input class='btn btn-custom' type='submit' value='View villas'>
      </div>
    </form>
  </div>
  <div class='navbar navbar-expand-lg' id='laKazBourbonNavbar'>
    <?php if ( wp_is_mobile() ) : ?>
      <div class='container-fluid'>
      <a class='navbar-brand' href='./'>
        <img alt='La Kaz Bourbon' src='<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo-la-kaz-bourbon.png'>
      </a>
      <button aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation' class='navbar-toggler' data-bs-target='#navbarSupportedContent' data-bs-toggle='collapse' type='button'>
        <i class='fa fa-bars'></i>
      </button>
      <div class='collapse navbar-collapse' id='navbarSupportedContent'>
        <?php
        wp_nav_menu( array(
            'menu_class' => 'navbar-nav mb-2 mb-lg-0', 
            'menu_class_li' => 'nav-item', 

            'theme_location' => 'my-custom-menu', 
            'container_class' => 'menu',
            'link_before' => '<i class="bx bx-user-pin"></i>' ) ); 
        ?>
        <ul class="main-ul__language">
          <li class='nav-item languages'>
            <?php pll_the_languages( array( 'dropdown' => 1 ) ); ?>
          </li>
        </ul>
      </div>
    </div>
    <?php else : ?>
      <?php
      wp_nav_menu( array(
          'menu_class' => 'navbar-nav mb-2 mb-lg-0', 
          'menu_class_li' => 'nav-item', 

          'theme_location' => 'my-custom-menu', 
          'container_class' => 'menu',
          'link_before' => '<i class="bx bx-user-pin"></i>' ) ); 
      ?>
      <ul class="main-ul__language">
        <li class='nav-item languages'>
          <?php pll_the_languages( array( 'dropdown' => 1 ) ); ?>
        </li>
      </ul>
    <?php endif; ?>
  
    </div>

  
  <style>
    .navbar{
      z-index: 9999;
    }
    .navbar .menu-item {
      margin: 0 20px;
    }
    .navbar .menu-item a {
      color: #192752;
      font-weight: 500;
      text-transform: uppercase;
      font-size: 14px;
      text-decoration: none;
    }
    .menu-item a img{
      width: 321px;
      height: 136px;
      object-fit: contain;
      margin-top: 30px;
    }
    .menu .navbar-nav {
      flex-direction: row;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .menu-item-has-children{
      position: relative;
      
    }
    .menu-item-has-children a:nth-child(1)::after{
      content: "";
      border: 0;
      background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow.svg);
      width: 14px;
      height: 8px;
      background-repeat: no-repeat;
      background-size: contain;
      background-position: center;
      top: 50%;
      transform: translateY(-50%);
      position: absolute;
      margin-left: 8px;
    }
    .sub-menu a::after{
      display: none;
    }
    .sub-menu  .menu-item {
      margin: 10px 20px;
    }    	
    .navbar-nav li ul {
      display:none;
      position:absolute;
      min-width:140px;
    }
    .navbar-nav li:hover > ul {
      display: block;
      z-index: 1000;
      min-width: 16rem;
      padding: 0;
      margin: 0;
      font-size: 1rem;
      text-align: left;
      list-style: none;
      background-clip: padding-box;
      border: 1px solid rgba(0,0,0,.15);
      border-radius: .25rem;
    }
    .main-ul__language{
      list-style: none;
    }
    

    @media (min-width: 0px) and (max-width:575px){
      .navbar-nav {
          flex-direction: column !important;
          justify-content: start !important;
          align-items: start !important;
      }
      .navbar-nav li:nth-child(3){
        display: none;
      }
      .main-ul__language {
        padding-left: 0;
      }
      .navbar .menu-item {
          margin: 10px 20px 10px 10px;
      }
    }
    </style>