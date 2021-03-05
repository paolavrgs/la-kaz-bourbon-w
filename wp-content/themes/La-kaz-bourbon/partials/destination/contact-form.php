<!-- Contact -->
<div class='page-contact'>
  <div class='contact-card'>
    <div class='contact-card-header'>
      <h4>Want a personalized service? Send us a message!</h4>
      <p>Leave your name and email and we will contact you about all your inquiries.</p>
    </div>
    <div class='contact-card-form'>
      <form>
        <div class='form-row'>
          <div class='form-floating'>
            <input class='form-control' id='name' placeholder='Name' type='text'>
            <label for='name'>Name</label>
          </div>
          <div class='form-floating'>
            <input class='form-control' id='email' placeholder='Email' type='email'>
            <label for='email'>Email</label>
          </div>
          <div class='form-floating input-group'>
            <input class='form-control' id='arrivalDate' onblur='(this.type=&#39;text&#39;)' onfocus='(this.type=&#39;date&#39;)' placeholder='Date of arrival' type='text'>
            <label for='arrivalDate'>Date of arrival</label>
            <span class='input-group-text'>
              <img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/home-icon.svg'>
            </span>
          </div>
        </div>
        <div class='form-row'>
          <div class='form-floating'>
            <textarea class='form-control' id='comments' placeholder='How can we help you?'></textarea>
            <label for='comments'>How can we help you?</label>
          </div>
        </div>
        <div class='form-submit'>
          <input class='btn btn-custom inverse' type='submit' value='Send'>
        </div>
      </form>
    </div>
  </div>
</div>