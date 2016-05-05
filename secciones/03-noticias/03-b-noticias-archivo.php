
  <!-- seccion  archivo -->
  <section id="noticias-archivo" class="sticky-here small-12 columns p0">



    <!-- sidebar categoria etiquetas -->
    <?php
    include_once '../08-elementos/08-a-categorias-etiquetas.php';
    #get_template_part( 'secciones/08-elementos/08-a-categorias-etiquetas.php');
    ?>
    <!-- sidebar categoria etiquetas -->



    <!-- lista noticias -->
    <div class="small-12 large-8 columns ha p2">


      <?php
      for ($i=0; $i < 12 ; $i++) {
        ?>
         <article id="noticias-contenedor-contenido" class="small-6 columns p2 h_50">



          <a href="#" class="h_100">

            <!-- Titulo noticia -->
            <div id="noticias-titulo-destacado" class="columns p2 ha text-center fontL">
              Título de la entrada
            </div><!-- Titulo noticia -->


            <!-- fecha destacada -->
            <div id="noticias-fecha" class="medium-12 columns p2 text-right fontS">
              Publicado el 1 enero 2000
            </div><!-- fecha destacada -->


            <!-- Imagen destacada -->
            <div id="noticias-imagen" class="medium-5 columns h_20vh p0 ">
              <div class="h_100 imgLiquid imgLiquidNoFill">
                <img src="http://fakeimg.pl/600x420" alt="">
              </div>
            </div><!-- Imagen destacada -->


            <!-- extracto destacada -->
            <div id="noticias-extracto" class="small-8 medium-7 columns ha p2 fontXS text-left">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ad.  Libero ad, minima aperiam perspiciatis
            </div><!-- extracto destacada -->




            <!-- ver mas destacado -->
            <div id="noticias-vermas" class="small-4 medium-7 columns ha p2 fontS text-right">
              Ver mas
              <i class="fa fa-angle-right"></i>
            </div>
            <!-- ver mas destacado -->

          </a>
        </article>



      </article>

      <?php
    };
    ?>



  </div>
  <!-- lista noticias -->


</section>
<!-- seccion  archivo -->
