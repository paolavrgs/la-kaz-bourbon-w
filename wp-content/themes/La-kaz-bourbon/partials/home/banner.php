<!-- Banner  -->


  <div class="home-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/backgrounds/banner_bg.jpg)">
    <!-- <video autoplay="" id="bannerVideo" loop="" muted="" src="http://159.89.229.55/Trofes/wp-content/uploads/2021/02/LKB-1-min.mp4"></video> -->
    <h1>an island with a big secret</h1>
    <h2>an unforgettable experience</h2>
    <div class='widget'>
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

    <div class="banner-arrow-down">
      <h5><?php _e('Meet La Reunion', 'apk'); ?></h5>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/button-arrow.svg">
    </div>
    <div class="banner-video-controls">
      <img class="pause-video" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/stop-video.svg">
      <img class="mute-video" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/mute-video.svg">
    </div>
  </div>