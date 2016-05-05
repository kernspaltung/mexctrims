<?php

get_header();

?>


<div class="columns ha p0">


  <section id="noticias-destacadas" class="small-12 columns p0">



    <!-- contenido destacado-->
    <article id="noticias-contenido-destacado" class="small-12 medium-7 columns p0 h_50vh">


      <a href="#" class="h_100">
        <!-- Titulo noticia -->
        <div id="noticias-titulo-destacado" class="columns p3 text-center fontL">
          Título de la entrada
        </div><!-- Titulo noticia -->



        <!-- fecha destacada -->
        <div id="noticias-fecha" class="small-12 columns h_10 p2 text-right fontS">
          Publicado el 1 enero 2000
        </div><!-- fecha destacada -->


        <!-- Imagen destacada -->
        <div id="noticias-imagen" class="small-6 medium-12 columns h_70 p0">
          <div class="h_100 imgLiquid imgLiquidFill">
            <img src="http://fakeimg.pl/600x420" alt="">
          </div>
        </div><!-- Imagen destacada -->


        <!-- extracto destacada -->
        <div id="noticias-extracto" class="small-6 medium-9 columns ha p4 fontS text-left ">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ad, minima aperiam perspiciatis Libero ad, minima aperiam perspiciatis.
        </div><!-- extracto destacada -->


        <!-- ver mas destacado -->
        <div id="noticias-vermas" class="small-3 columns h_50 h_sm_20 text-middle p2 fontS text-right">
          <div class="small-12 vcenter">
            Ver mas
            <i class="fa fa-angle-right"></i>
          </div>
        </div>
        <!-- ver mas destacado -->

      </a>

    </article>
    <!-- contenido destacado-->



    <!-- entrada penultima y antepenultima -->
    <div class="small-12 medium-5 columns ha p0">

      <!-- 1 -->
      <article id="noticias-contenido-subdestacado" class="small-12 columns h_35vh h_sm_33 pr0">
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
          <div id="noticias-imagen" class="medium-5 columns h_50 p0 show-for-medium">
            <div class="h_100 imgLiquid imgLiquidNoFill">
              <img src="http://fakeimg.pl/600x420" alt="">
            </div>
          </div><!-- Imagen destacada -->


          <!-- extracto destacada -->
          <div id="noticias-extracto" class="small-8 medium-7 columns ha p2 fontXS text-left">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ad. Libero ad, minima aperiam perspiciatis
          </div><!-- extracto destacada -->




          <!-- ver mas destacado -->
          <div id="noticias-vermas" class="small-4 medium-7 columns ha p2 fontS text-right">
            Ver mas
            <i class="fa fa-angle-right"></i>
          </div>
          <!-- ver mas destacado -->

        </a>
      </article>


      <!-- 2 -->
      <article id="noticias-contenido-subdestacado" class="small-12 columns h_35vh h_sm_33 pr0">
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
          <div id="noticias-imagen" class="medium-5 columns h_50 p0 show-for-medium">
            <div class="h_100 imgLiquid imgLiquidNoFill">
              <img src="http://fakeimg.pl/600x420" alt="">
            </div>
          </div><!-- Imagen destacada -->


          <!-- extracto destacada -->
          <div id="noticias-extracto" class="small-8 medium-7 columns ha p4 fontXS text-left">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ad.  Libero ad, minima aperiam perspiciatis
          </div><!-- extracto destacada -->




          <!-- ver mas destacado -->
          <div id="noticias-vermas" class="small-4 medium-7 columns ha p2 fontS text-right h_100">
            Ver mas
            <i class="fa fa-angle-right"></i>
          </div>
          <!-- ver mas destacado -->

        </a>
      </article>



    </div>
    <!-- entrada penultima y antepenultima -->


    <!-- sidebar categoria etiquetas movil -->
    <?php
    include_once 'secciones/08-elementos/08-b-categorias-etiquetas-acordeon.php';
    ?>
    <!-- sidebar categoria etiquetas movil -->



  </section>




  <!-- seccion  archivo -->
  <section id="noticias-archivo" class="small-12 columns p0">



    <!-- sidebar categoria etiquetas -->
    <?php
    include_once 'secciones/08-elementos/08-a-categorias-etiquetas.php';
    ?>
    <!-- sidebar categoria etiquetas -->



    <!-- lista noticias -->
    <div class="small-12 large-8 columns ha p2">


      <?php
      for ($i=0; $i < 24 ; $i++) {
        echo '<article id="noticias-contenedor-contenido" class="small-6 columns p2 h_50">



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



      </article>';
    };
    ?>



  </div>
  <!-- lista noticias -->


</section>
<!-- seccion  archivo -->



</div>
<!-- todo -->
<?php

get_footer();

?>
