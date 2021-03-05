<div class="news-container">
  <div class="section-title">
    <h1><?php _e('Latest News', 'apk'); ?></h1>
  </div>
  <!-- Tabs nav -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item" role="presentation">
      <button aria-controls="all-news" aria-selected="true" class="nav-link active" data-bs-target="#all-news" data-bs-toggle="tab" id="all-news-tab" role="tab" type="button"><?php _e('ALL NEWS', 'apk'); ?></button>
    </li>
    <?php  $tax = $wp_query->get_queried_object(); ?>
      <?php $args = array(
        'orderby' => 'slug',
        'order' => 'ASC'
      );
      $post_categories = get_terms('category', $args);
      $counterNumber = 1;
      foreach ($post_categories as $post_category): ?>
        <li class="nav-item" role="presentation">
          <button aria-controls="id-<?php echo $post_category->term_id;?>" aria-selected="false" class="nav-link <?php if($tax->name == $post_category->name ){ echo 'active';} ?>" data-bs-target="#id-<?php echo $post_category->term_id;?>" data-bs-toggle="tab" id="id-<?php echo $post_category->term_id;?>-tab" role="tab" type="button"><?php echo $post_category->name;?> </button>
      </li>

    <?php endforeach; ?>    
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

    <?php  $tax = $wp_query->get_queried_object(); ?>
    <?php $args = array(
      'orderby' => 'slug',
      'order' => 'ASC'
    );
    $post_categories = get_terms('category', $args);
    $counterNumber = 1;
    foreach ($post_categories as $post_category): ?>
      <div aria-labelledby="id-<?php echo $post_category->term_id;?>-tab" class="tab-pane <?php if($tax->name == $post_category->name ){ echo 'show active';} ?>" id="#id-<?php echo $post_category->term_id;?>" role="tabpanel">
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
    <?php endforeach; ?>    
  
  </div>
</div>