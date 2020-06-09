      <section id="contacto" class="main-twoform">
        <div class="container-fluid">
          <div class="main-twoform__content">
            <div class="main-twoform__item">
              <div class="main-footer__titleposition">
                <div class="main-title__general main-title__general--small">
                  <p>
                      Quiero recibir  <br>
                    <strong>más información</strong>
                  </p>
                </div>
              </div>
              <div class="main-twoform__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/about.jpg" alt="">
              </div>
            </div>
            <div class="main-twoform__item">
              <form action="">
                <div class="form-group">
                  <label for="">Nombre y apellido</label>
                  <input class="form-control" id="formGroupExampleInput" placeholder="" type="text">
                </div>
    
                <div class="form-group">
                  <label for="">Correo</label>
                  <input class="form-control" id="formGroupExampleInput2" placeholder="" type="email">
                </div>
                
                <div class="form-group">
                  <label for="">Teléfono</label>
                  <input class="form-control" id="formGroupExampleInput2" placeholder="" type="tel">
                </div>
                <div class="form-group">
                  <label for="">Ciudad</label>
                  <input class="form-control" id="formGroupExampleInput2" placeholder="" type="text">
                </div>
                <div class="form-group">
                  <label for="">Mensaje</label>
                  <textarea name="" placeholder="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group form-check mb-2">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label font-general main-oneform__text main-oneform__textDark ">
                    Acepto
                    <a href="<?php echo get_template_directory_uri();?>/assets/pdf/MANUAL_DE_POLITICAS_PROMOTORA.pdf" target="blank">Política de Privacidad</a>
                  </label>
                </div>
          
                <div class="main-contact__btnbox">
                  <a class="btn_custom btn--medium btn--filledLight" href="#">
                      Enviar
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      