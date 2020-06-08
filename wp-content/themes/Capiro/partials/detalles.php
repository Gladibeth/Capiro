      <section id="detalles-proyecto" class="main-details">
        <div class="container-fluid">
          <div class="main-details__content">
            <div class="main-details__item">
              <div class="main-title__general">
                <p>
                  detalles del <br>
                  <strong>proyecto</strong>
                </p>
              </div>
            </div>
            <div class="main-details__item">
                  <?php $args = array( 'post_type' => 'detalles');?>   
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <div class="main-details__box">
                <div class="main-details__icon">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                </div>
                <div class="main-details__boxtext">
                  <div class="main-details__title">
                    <p class="font-general"><?php the_title(); ?></p>
                  </div>
                  <div class="main-details__description">
                 <?php the_excerpt(); ?>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          
            </div>
          </div>
        </div>
      </section>