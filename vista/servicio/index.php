<section id="services">
    <div class="container marketing" >
      <div class="row" align="center">
       
        <div class="col-lg-4">
            <div>
              <a href="http://mirennay.epizy.com">
                <img  class="servicio-dibujo rounded-circle" src="<?php echo URL ?>libreria/images/servicio/M.jpg" alt="Generic placeholder image" width="140" height="140">
              </a> 
             </div>
              <h2>E-commerce</h2><br>
              <strong style="font-size: 15px;">Si no puedes gritar lo que piensas, expresa lo que eres con la mejor ropa de MIRENNAY</strong>
              <p>Dando clik en el logotipo de la tienda M.</p>          
        </div>
        <div class="col-lg-4" >
            <div>
              <img  class="servicio-dibujo rounded-circle" src="<?php echo URL ?>libreria/images/servicio/1.jpg" alt="Generic placeholder image" width="140" height="140">
            </div>
            <h2>Software developer</h2><br>
            <strong style="font-size: 15px;">
              Servicio de desarrollo de software en JAVA, JSP, PHP, JavaScript.
            </strong>
            <p>para ponerte en contacto conmigo enviame un comentario por aqui o por mi facebook.</p>
        </div>
        <div class="col-lg-4" >
          <div>
            <a href="#" data-toggle="modal" data-target="#modalServicio">
              <img  class="servicio-dibujo rounded-circle" src="<?php echo URL ?>libreria/images/servicio/2.jpg" alt="Generic placeholder image" width="140" height="140">
            </a>
          </div>
          <h2>Dibujos</h2><br>
          <strong style="font-size: 15px;">
            Si quieres un dibujo para sorprender a un ser querido, te ofrecemos el servicio de dibujo.
          </strong>
          <p>Dando clic en la imagen de arriba puedes ver algunos dibujos echos por mi.</p>          
        </div>

      </div>
    </div>
</section>

<div class="modal fade" id="modalServicio" tabindex="-1" role="dialog" aria-labelledby="modalServicioLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalServicioLabel">Dibujos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?php echo URL ?>libreria/images/dibujos/Niña_lovo.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo URL ?>libreria/images/dibujos/1.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo URL ?>libreria/images/dibujos/3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Atras</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Grid -->