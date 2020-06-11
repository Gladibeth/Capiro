<footer>
        <div class="container-fluidLarge">
          <div class="main-footer__content">
            <div class="main-footer__item">
              <div class="main-footer__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" alt="">
              </div>
              <div class="main-footer__description">
                <p>Encuentra ese lugar que siempre has soñado para tener tu casa propia en una ubicación privilegiada en el municipio de La Ceja, un sector de alta valorización, con un entorno natural y cerca a todo lo que necesitas. Aplican subsidios.

                  </p>
              </div>
              <div class="main-footer__icon">
                <a  target="_blank" href="https://www.facebook.com/nivelpropiedadraiz">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/fb.png" alt="">
                </a>
                <a  target="_blank" href="https://www.instagram.com/nivelpropiedadraiz">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/instagram.png" alt="">
                </a>
              </div>
            </div>
            <div class="main-footer__item">
              <ul class='menu'>
                <li class='menu-title'>MENÚ</li>
                <li class='menu-title'>MENÚ</li>
                <li>
                  <a class='scroll-link' href='#detalles-proyecto'>Detalles del proyecto</a>
                </li>
                <li>
                  <a class='scroll-link' href='#acerca-proyecto'>Acerca del proyecto</a>
                </li>
                <li>
                  <a class='scroll-link' href='#galeria-proyecto'>Galería</a>
                </li>
                <li>
                  <a class='scroll-link' href='#caracteristica-proyecto'>Zonas comunes</a>
                </li>
                <li>
                  <a class='scroll-link' href='#planos-proyecto'>Planos del proyecto</a>
                </li>
                <li>
                  <a class='scroll-link' href='#ubicacion'>Ubicación</a>
                </li>
                <li>
                  <a class='scroll-link' href='#contacto'>Formulario</a>
                </li>
              </ul>
            </div>
    
            <div class="main-footer__item">
              <ul class='menu'>
                <li class='menu-title'>Contáctanos</li>
              </ul>
              <dl>

                <dt>Dirección</dt>
                <dd><a target="_blank" href=""> kilómetro 3 vía La Ceja - Rionegro</a></dd>
                <dt>Teléfono</dt>
                <dd>
                  <a target="_blank" href='tel:575373697'>+ 57 5373697</a>
                </dd>
                <dt>Celular</dt>
                <dd>
                  <a target="_blank" href='https://api.whatsapp.com/send?phone=573134141090'>+ 57 3134141090</a>
                </dd>
              </dl>            
              <a class='btn_custom btn--large btn--filledTransparent' target="_blank" href='<?php echo get_template_directory_uri();?>/assets/pdf/Presentacion- Capiro.pdf'>Descargar Brochure</a>
            </div>
          </div>
        </div>
        <div class="main-footer__copy">
          <a target="_blank" href="https://branch.com.co/">Copyright © 2020 Branch</a>
        </div>
      </footer>
  </div>

  <!-- MODAL -->

  <div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
  <?php $args = array( 'post_type' => 'galeria');
                        $countGalery = 1;
                 ?>   
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="mySlides">
      <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width:100%">
    </div>

    <?php $countGalery++; endwhile; ?>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>


  </div>
</div>

  <!-- MODAL -->

  <div id="myModal1" class="modal">
      <span class="close cursor" onclick="closeModal1()">&times;</span>
      <div class="modal-content">
      <?php $args = array( 'post_type' => 'planos');
        $countGalery2 = 1;?>   
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="mySlides1">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width:100%">
        </div>
      <?php $countGalery2++; endwhile; ?>
        
        
        <a class="prev" onclick="plusSlides1(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides1(1)">&#10095;</a>
  
  
      </div>
    </div>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/setting-slick.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
  <?php wp_footer(); ?>
</body>
</html>