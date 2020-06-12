      <section id="galeria-proyecto" class="main-gallery">
        <div class="container-fluid">
          <div class="main-title__general main-title__general--medium">
            <p>
                Galería del <br>
              <strong>proyecto</strong>
            </p>
          </div>
          <div class="main-gallery__content">
                 <?php $args = array( 'post_type' => 'galeria');
                        $countGalery = 1;
                        $delay = 0;
                 ?>   
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="main-gallery__item wow fadeIn" data-wow-delay='<?php echo $delay; ?>s' onclick="openModal();currentSlide(<?php echo $countGalery; ?>)">
              <div class="main-gallery__img" >
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              </div>
            </div>
          <?php $delay+=0.5; $countGalery++; endwhile; ?>
         
    
          </div>
        </div>
      </section>