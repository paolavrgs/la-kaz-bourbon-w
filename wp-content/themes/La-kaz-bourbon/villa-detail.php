<?php get_header(); ?>
  <!-- Product -->

  <div class="product green">
    <div class="product-images">
      <a class="btn btn-custom" data-bs-target="#productGalleryModal" data-bs-toggle="modal" href="#">See all photos</a>
      <div class="product-images-slider">
        <div class="product-image-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_1.jpg">
        </div>
        <div class="product-image-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_2.jpg">
        </div>
        <div class="product-image-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_3.jpg">
        </div>
      </div>
    </div>
    <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal gallery-modal fade" id="productGalleryModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
          </div>
          <div class="modal-body">
            <div class="product-gallery">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_1.jpg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_2.jpg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_3.jpg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_1.jpg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_2.jpg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_3.jpg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_1.jpg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_2.jpg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_3.jpg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_1.jpg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_2.jpg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_3.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Detals -->
    <div class="product-detail">
      <h1>
        La Garconniere
        <br>
        <span>Saint Pierre</span>
      </h1>
      <div class="product-description">
        <p>
          Perched on the shore of the
          <strong>Plage des Aigrettes</strong>
          with an uninterrupted view of the
          <strong>Indian Ocean,</strong>
          this traditional beach house is replete with tropical splendor. Surrounded by a
          <strong>tropical garden,</strong>
          the property includes a
          <strong>swimming pool, an outdoor shower, and direct access to the beach.</strong>
          The terrace provides the perfect spot to kick back and do some
          <strong>whale watching or marvel at the spectacular tropical sunsets.</strong>
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/la-garconniere-map.png">
      </div>
    </div>

    <!-- Featured -->
    <div class="product-features">
      <div class="product-features-left">
        <div class="product-features-list">
          <h5>Things to do around the villa</h5>
          <ul>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/activities/village.svg">
              <span>
                Go “local” a
                <strong>short 10-minute walk</strong>
                away in the village of
                <strong>Boucan Canot, where you’ll find plenty of</strong>
                <strong>restaurants and bars</strong>
                to explore.
              </span>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/activities/fruits.svg">
              <span>
                Need to stock up on
                <strong>supplies</strong>
                or snacks?
                <br>
                Take a
                <strong>quick 2-minute drive to the supermarket</strong>
                or stop by one of several
                <strong>roadside fruit and vegetable stands.</strong>
              </span>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/activities/surfing.svg">
              <span>
                Need more? Check out the
                <strong>surf breaks</strong>
                at the nearby
                <strong>Plage des Brisants or</strong>
                <strong>drive 10 minutes</strong>
                to the lively
                <strong>bars and restaurants</strong>
                surrounding
                <strong>the Plage des Roches Noires.</strong>
              </span>
            </li>
          </ul>
        </div>
        <div class="product-services">
          <h5>Services</h5>
          <div class="product-services-grid">
            <div class="product-service-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/services/beach.svg">
              <span>Sea view</span>
            </div>
            <div class="product-service-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/services/bedroom.svg">
              <span>Bedroom*</span>
            </div>
            <div class="product-service-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/services/safe.svg">
              <span>Safety & Security</span>
            </div>
            <div class="product-service-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/services/towel.svg">
              <span>Room Amenities</span>
            </div>
            <div class="product-service-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/services/computer.svg">
              <span>Media & Technology</span>
            </div>
            <div class="product-service-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/services/wifi.svg">
              <span>Internet</span>
            </div>
          </div>
          <div class="load-more-services">
            <span>See all 20 services</span>
            <svg height="18" viewbox="0 0 18 18" width="18" xmlns="http://www.w3.org/2000/svg">
              <g fill-rule="evenodd" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <g stroke-width="2" stroke="#192752">
                  <g>
                    <g>
                      <path d="M0 0L8 8 16 0M0 8L8 16 16 8" transform="translate(-711 -2158) translate(671 2123) translate(41 36)"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
        </div>
      </div>
      <div class="product-features-right">
        <div class="product-check sticky-top">
          <div class="product-check-card">
            <div class="price">
              $400
              <span>/ night</span>
            </div>
            <div class="book-form">
              <form>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-group">
                      <input aria-label="Arrival" class="form-control" onblur="(this.type=&#39;text&#39;)" onfocus="(this.type=&#39;date&#39;)" placeholder="Arrival" type="text">
                      <span class="input-group-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/home-icon.svg">
                      </span>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <input aria-label="Departure" class="form-control" onblur="(this.type=&#39;text&#39;)" onfocus="(this.type=&#39;date&#39;)" placeholder="Departure" type="text">
                      <span class="input-group-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/home-icon.svg">
                      </span>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <select class="form-select">
                      <option disabled selected="selected">Guests</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
              </form>
              <input class="btn btn-custom" type="submit" value="Check availability">
            </div>
            <div class="book-prices">
              <dl>
                <dt>$400 x 2 nights</dt>
                <dd>$800</dd>
              </dl>
              <dl>
                <dt>Service tax</dt>
                <dd>$80</dd>
              </dl>
            </div>
            <div class="book-total">
              <dl>
                <dt>Total</dt>
                <dd>$880</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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

  <!-- Related -->
  <div class="villa-related">
    <div class="section-title">
      <h1>Whats around?</h1>
    </div>
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button aria-controls="nearby" aria-selected="true" class="nav-link active" data-bs-target="#nearby" data-bs-toggle="tab" id="nearby-tab" role="tab" type="button">Nearby Interests</button>
      </li>
      <li class="nav-item" role="presentation">
        <button aria-controls="restaurants" aria-selected="false" class="nav-link" data-bs-target="#restaurants" data-bs-toggle="tab" id="restaurants-tab" role="tab" type="button">Restaurants & Markets</button>
      </li>
      <li class="nav-item" role="presentation">
        <button aria-controls="attractions" aria-selected="false" class="nav-link" data-bs-target="#attractions" data-bs-toggle="tab" id="attractions-tab" role="tab" type="button">Natural Attractions</button>
      </li>
      <li class="nav-item" role="presentation">
        <button aria-controls="airports" aria-selected="false" class="nav-link" data-bs-target="#airports" data-bs-toggle="tab" id="airports-tab" role="tab" type="button">Airports</button>
      </li>
    </ul>
    <div class="tab-content">
      <div aria-labelledby="nearby-tab" class="tab-pane fade show active" id="nearby" role="tabpanel">
        <div class="related-grid">
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
        </div>
        <nav>
          <ul class="pagination justify-content-center">
            <li class="page-item active">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
          </ul>
        </nav>
      </div>
      <div aria-labelledby="restaurants-tab" class="tab-pane fade" id="restaurants" role="tabpanel">
        <div class="related-grid">
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div aria-labelledby="attractions-tab" class="tab-pane fade" id="attractions" role="tabpanel">
        <div class="related-grid">
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div aria-labelledby="airports-tab" class="tab-pane fade" id="airports" role="tabpanel">
        <div class="related-grid">
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
          <div class="related-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/related_product.jpg">
            <div class="related-item-text">
              <h4>Temple Tamoul Narassingua Perournal</h4>
              <div class="related-km">
                <span>6.6 km</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/shape.svg">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>