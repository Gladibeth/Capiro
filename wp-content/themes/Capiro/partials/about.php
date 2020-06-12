<section class="main-about" id="acerca-proyecto">
  <?php $args = array( 'post_type' => 'Acerca', 'posts_per_page' => 1);?>   
  <?php $loop = new WP_Query( $args ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <div class="container-fluid">
    <div class="main-about__content">
      <div class="main-about__item">
        <div class="main-title__general">
          <p>
            acerca del <br>
            <strong>proyecto</strong>
          </p>
        </div>
        <div class="main-description__general">
          <p><?php the_content(); ?></p>
        </div>
      </div>
      <div class="main-about__item wow fadeInRight"  data-wow-delay='.5s'>
        <div class="main-about__img">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        </div>
      </div>
      
    </div>
  </div>
  <?php endwhile; ?>
</section>