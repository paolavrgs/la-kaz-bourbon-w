
  <!-- Content -->
  <div class="villas-container">
    
    <!-- Filters -->
    <div class="villas-filters">
      <div class="filter-card">
        <div class="input-group mt-0">
          <input class="form-control" placeholder="Search by name" type="search">
          <span class="input-group-text">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/search-icon.svg">
          </span>
        </div>
        <div class="filter-item">
          <h5>Filter</h5>
          <div class="input-group">
            <input aria-label="Arrival date" class="form-control" onblur="(this.type=&#39;text&#39;)" onfocus="(this.type=&#39;date&#39;)" placeholder="Arrival date" type="text">
            <span class="input-group-text">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/home-icon.svg">
            </span>
          </div>
          <select class="form-select">
            <option disabled selected="selected">Guests</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <select class="form-select">
            <option disabled selected="selected">Bedrooms</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <select class="form-select">
            <option disabled selected="selected">Region</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="filter-item">
          <h5>Price (night)</h5>
          <input class="form-range" id="priceRange" max="2000" min="0" step="10" type="range" value="400">
          <div class="selected-range">
            <span>$</span>
          </div>
        </div>
        <div class="filter-item">
          <h5>Location</h5>
          <div class="filter-checkboxes">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="">
              <label class="form-check-label">
                On the coast
                <span>(3)</span>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="">
              <label class="form-check-label">
                Sea view
                <span>(3)</span>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="">
              <label class="form-check-label">
                Countryside
                <span>(0)</span>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="">
              <label class="form-check-label">
                Near Village
                <span>(1)</span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Result -->
    <div class="villas-results">
      <div class="results-header">
        <div class="results-number">
          <span>
            <strong>
              3
            </strong>
            villas found
          </span>
        </div>
        <div class="sort-filter">
          <strong>Sort by:</strong>
          <select class="form-select">
            <option selected="selected">Popularity</option>
            <option value="low-price">Low Price</option>
            <option value="high-price">High Price</option>
          </select>
        </div>
      </div>
      <div class="results-list">
        <div class="result-item green">
          <div class="result-item-right">
            <h2>
              la Garconniere
              <span>Saint Pierre</span>
            </h2>
            <div class="result-item-images">
              <img class="image-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_1.jpg">
              <img class="image-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_2.jpg">
              <img class="image-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_3.jpg">
            </div>
            <div class="result-item-description">
              <p>Perched on the shore of the Plage des Aigrettes with an uninterrupted view of the Indian Ocean, this traditional beach house is replete with tropical splendor.</p>
            </div>
          </div>
          <div class="result-item-left">
            <div class="result-item-info">
              <ul class="item-info-features">
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/guests.svg">
                  <span>10</span>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/beds.svg">
                  <span>4</span>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/baths.svg">
                  <span>3</span>
                </li>
              </ul>
              <div class="item-info-ranking">
                <h4>
                  Fantastic
                  <br>
                  <span>12 comments</span>
                </h4>
                <div class="ranking-number">
                  <span>9.6</span>
                </div>
              </div>
              <div class="item-info-prices">
                <dl>
                  <dt>Low Season</dt>
                  <dd>$400 p.n.</dd>
                  <dt>High Season</dt>
                  <dd>$800 p.n.</dd>
                </dl>
              </div>
              <a class="btn btn-custom" href="villa-detail.html">Read more</a>
            </div>
          </div>
        </div>
        <div class="result-item blue">
          <div class="result-item-right">
            <h2>
              Cap Homard
              <span>Saint Pierre</span>
            </h2>
            <div class="result-item-images">
              <img class="image-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_1.jpg">
              <img class="image-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_2.jpg">
              <img class="image-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_3.jpg">
            </div>
            <div class="result-item-description">
              <p>Perched on the shore of the Plage des Aigrettes with an uninterrupted view of the Indian Ocean, this traditional beach house is replete with tropical splendor.</p>
            </div>
          </div>
          <div class="result-item-left">
            <div class="result-item-info">
              <ul class="item-info-features">
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/guests.svg">
                  <span>8</span>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/beds.svg">
                  <span>4</span>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/baths.svg">
                  <span>2</span>
                </li>
              </ul>
              <div class="item-info-ranking">
                <h4>
                  Perfect
                  <br>
                  <span>8 comments</span>
                </h4>
                <div class="ranking-number">
                  <span>10</span>
                </div>
              </div>
              <div class="item-info-prices">
                <dl>
                  <dt>Low Season</dt>
                  <dd>$600 p.n.</dd>
                  <dt>High Season</dt>
                  <dd>$1000 p.n.</dd>
                </dl>
              </div>
              <a class="btn btn-custom" href="villa-detail.html">Read more</a>
            </div>
          </div>
        </div>
        <div class="result-item orange">
          <div class="result-item-right">
            <h2>
              Des Aigrettes
              <span>Saint Pierre</span>
            </h2>
            <div class="result-item-images">
              <img class="image-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_1.jpg">
              <img class="image-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_2.jpg">
              <img class="image-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/villas_3.jpg">
            </div>
            <div class="result-item-description">
              <p>Perched on the shore of the Plage des Aigrettes with an uninterrupted view of the Indian Ocean, this traditional beach house is replete with tropical splendor.</p>
            </div>
          </div>
          <div class="result-item-left">
            <div class="result-item-info">
              <ul class="item-info-features">
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/guests.svg">
                  <span>12</span>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/beds.svg">
                  <span>6</span>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/baths.svg">
                  <span>4</span>
                </li>
              </ul>
              <div class="item-info-ranking">
                <h4>
                  Sublime
                  <br>
                  <span>20 comments</span>
                </h4>
                <div class="ranking-number">
                  <span>8</span>
                </div>
              </div>
              <div class="item-info-prices">
                <dl>
                  <dt>Low Season</dt>
                  <dd>$320 p.n.</dd>
                  <dt>High Season</dt>
                  <dd>$580 p.n.</dd>
                </dl>
              </div>
              <a class="btn btn-custom" href="villa-detail.html">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>