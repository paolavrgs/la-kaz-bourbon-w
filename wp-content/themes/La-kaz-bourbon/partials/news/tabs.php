<div class="news-container">
  <div class="section-title">
    <h1><?php _e('Latest News', 'apk'); ?></h1>
  </div>
  <!-- Tabs nav -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item" role="presentation">
      <button aria-controls="all-news" aria-selected="true" class="nav-link active" data-bs-target="#all-news" data-bs-toggle="tab" id="all-news-tab" role="tab" type="button"><?php _e('ALL NEWS', 'apk'); ?></button>
    </li>
    <li class="nav-item" role="presentation">
      <button aria-controls="lifestyle" aria-selected="false" class="nav-link" data-bs-target="#lifestyle" data-bs-toggle="tab" id="lifestyle-tab" role="tab" type="button"><?php _e('EVENTS', 'apk'); ?></button>
    </li>
    <li class="nav-item" role="presentation">
      <button aria-controls="food" aria-selected="false" class="nav-link" data-bs-target="#food" data-bs-toggle="tab" id="food-tab" role="tab" type="button"><?php _e('FOOD & DRINKS', 'apk'); ?></button>
    </li>
    <li class="nav-item" role="presentation">
      <button aria-controls="travel" aria-selected="false" class="nav-link" data-bs-target="#travel" data-bs-toggle="tab" id="travel-tab" role="tab" type="button"><?php _e('TRAVEL', 'apk'); ?></button>
    </li>
    
  </ul>
  
  <!-- Tabs content -->
  <div class="tab-content">
    <div aria-labelledby="all-news-tab" class="tab-pane fade show active" id="all-news" role="tabpanel">
      <div class="blog-grid">
        <?php $args = array('post_type' => 'post'); 
        $counterPostGeneral = 1;
        $post_date = get_the_date( ' M j' ); 
        ?>
        <?php $loop = new WP_Query($args); ?>
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
          <?php if($counterPostGeneral <= 1): ?>
            <div class="blog-card one-column">
              <div class="blog-card-img">
                <a href="<?php the_permalink(); ?>">
                  <img alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
                </a>
                <div class="blog-card-info">
                  <span class="info-category"><?php the_category( ' ' ); ?></span>
                  <h4>“<?php the_title(); ?>”</h4>
                  <span class="info-date"><?php the_time( 'F jS, Y' ); ?></span>
                </div>
              </div>
            </div>
          <?php else: ?>
            <a class="blog-card three-columns" href="<?php the_permalink(); ?>">
              <div class="blog-card-img">
                <img alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
                <div class="blog-card-date">
                  <span><?php echo  $post_date;?></span>
                </div>
              </div>
              <div class="blog-card-text">
                <h4>“<?php the_title(); ?>”</h4>
                <span>en.reunion.fr</span>
              </div>
            </a>
        <?php endif; $counterPostGeneral++; endwhile; ?>
      </div>
      <div class="load-more-news">
        <span>See more</span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrows.svg">
      </div>
    </div>
    <div aria-labelledby="lifestyle-tab" class="tab-pane fade" id="lifestyle" role="tabpanel">
      <div class="blog-grid">
        <div class="blog-card one-column">
          <a class="blog-card-img" href="new-detail.html">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_big.jpg">
            <div class="blog-card-info">
              <span class="info-category">lifestyle</span>
              <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae magna nibh. Aliquam erat volutpat.”</h4>
              <span class="info-date">January 7, 2020</span>
            </div>
          </a>
        </div>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_1.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_2.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_3.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_4.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_5.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_6.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
      </div>
      <div class="load-more-news">
        <span>See more</span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrows.svg">
      </div>
    </div>
    <div aria-labelledby="food-tab" class="tab-pane fade" id="food" role="tabpanel">
      <div class="blog-grid">
        <div class="blog-card one-column">
          <a class="blog-card-img" href="new-detail.html">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_big.jpg">
            <div class="blog-card-info">
              <span class="info-category">lifestyle</span>
              <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae magna nibh. Aliquam erat volutpat.”</h4>
              <span class="info-date">January 7, 2020</span>
            </div>
          </a>
        </div>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_1.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_2.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_3.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_4.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_5.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_6.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
      </div>
      <div class="load-more-news">
        <span>See more</span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrows.svg">
      </div>
    </div>
    <div aria-labelledby="travel-tab" class="tab-pane fade" id="travel" role="tabpanel">
      <div class="blog-grid">
        <div class="blog-card one-column">
          <a class="blog-card-img" href="new-detail.html">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_big.jpg">
            <div class="blog-card-info">
              <span class="info-category">lifestyle</span>
              <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae magna nibh. Aliquam erat volutpat.”</h4>
              <span class="info-date">January 7, 2020</span>
            </div>
          </a>
        </div>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_1.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_2.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_3.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_4.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_5.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_6.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
      </div>
      <div class="load-more-news">
        <span>See more</span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrows.svg">
      </div>
    </div>
    <div aria-labelledby="la-reunion-tab" class="tab-pane fade" id="la-reunion" role="tabpanel">
      <div class="blog-grid">
        <div class="blog-card one-column">
          <a class="blog-card-img" href="new-detail.html">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_big.jpg">
            <div class="blog-card-info">
              <span class="info-category">lifestyle</span>
              <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae magna nibh. Aliquam erat volutpat.”</h4>
              <span class="info-date">January 7, 2020</span>
            </div>
          </a>
        </div>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_1.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_2.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_3.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_4.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_5.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
        <a class="blog-card three-columns" href="new-detail.html">
          <div class="blog-card-img">
            <img alt="Loremp ipsum" src="<?php echo get_template_directory_uri(); ?>/assets/img/news/latest_news_6.jpg">
            <div class="blog-card-date">
              <span>NOV 20</span>
            </div>
          </div>
          <div class="blog-card-text">
            <h4>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo odio.”</h4>
            <span>en.reunion.fr</span>
          </div>
        </a>
      </div>
      <div class="load-more-news">
        <span>See more</span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrows.svg">
      </div>
    </div>
  </div>
</div>