<!-- Blog -->
<div class="home-blog">
  <div class="section-title">
    <h1><?php _e('Latest News', 'apk'); ?></h1>
  </div>
  <div class="blog-grid">
    <?php $args = array('post_type' => 'post'); 
    $counterPost = 1;    ?>
    <?php $loop = new WP_Query($args); ?>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
      <a class="blog-card <?php if (  $counterPost <= 2 ):  echo 'two-columns'; else:  echo 'three-columns';  endif; ?>" href="<?php the_permalink(); ?>">
        <div class="blog-card-img">
          <img alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
          <div class="blog-card-date">
            <span><?php echo  get_the_date( ' M j' ); ?></span>
          </div>
        </div>
        <div class="blog-card-text">
          <h4>“<?php the_title(); ?>”</h4>
          <span>en.reunion.fr</span>
        </div>
      </a>
    <?php $counterPost++; endwhile; ?>

  </div>
</div>