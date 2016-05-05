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


    <!-- Categorias movil -->
    <ul id="noticias-categorias-small-medium" class="small-12 columns p0 accordion mt2 hide-for-large" data-accordion>

      <!-- acordion categorias -->
      <li class="columns accordion-item p0" data-accordion-item>

        <a href="#" class="accordion-title ha">
          Categorias:
          <?php
          for ($i=0; $i < 4; $i++) {
            echo  '<a href="">
              <div class="small-6 columns fontXS p1">Cat' . $i . '</div>
            </a>';
          }
          ?>
        </a>

        <!-- contenido acordeon -->
        <div class="accordion-content p0" data-tab-content>

          <ul class="menu small-12 columns p0">
            <?php
            for ($i=0; $i < 12; $i++) {
              echo  '<a href="">
                <li class="small-4 columns fontXS p3 text-center">Cat' . $i . '</li>
              </a>';
            }
            ?>
          </ul>

        </div>
      </li>

      <!-- acordeon tags -->
      <li class="columns accordion-item p0" data-accordion-item>

        <a href="#" class="accordion-title ha">
          Tags:
          <?php
          for ($i=0; $i < 6; $i++) {
            echo  '<a href="">
              <div class="small-4 columns fontXS p1">Tag' . $i . '</div>
            </a>';
          }
          ?>
        </a>

        <!-- contenido acordeon -->
        <div class="accordion-content p0" data-tab-content>

          <ul class="menu small-12 columns p0">
            <?php
            for ($i=0; $i < 32; $i++) {
              echo  '<a href="">
                <li class="small-4 columns fontXS p3 text-center">Tag' . $i . '</li>
              </a>';
            }
            ?>
          </ul>

        </div>
      </li>
    </ul>
    <!-- Categorias movil -->



  </section>




  <!-- seccion  archivo -->
  <section id="noticias-archivo" class="small-12 columns p0">


    <!-- Categorias large -->
    <aside id="noticias-aside-large" class="large-4 columns show-for-large ha">

      <h2 class="columns fontL p3 text-center">Categorias</h2>

      <ul id="noticias-tags-lista" class="menu small-12 columns p0">
        <?php
        for ($i=0; $i < 12; $i++) {
          echo  '<a href="">
            <li class="small-4 columns fontXS p3 text-center">Categoría' . $i . '</li>
          </a>';
        }
        ?>
      </ul>


      <!-- Etiquetas large -->
      <h2 class="columns fontL p3 text-center">Etiquetas</h2>

      <ul id="noticias-tags-lista" class="menu small-12 columns p0">
        <?php
        for ($i=0; $i < 24; $i++) {
          echo  '<a href="">
            <li class="small-4 columns fontXS p3 text-center">Etiqueta' . $i . '</li>
          </a>';
        }
        ?>
      </ul>

    </aside>
    <!-- Etiquetas large -->
    <!-- Categorias large -->

    <!-- lista noticias -->
    <div class="small-12 medium-8 columns ha p2">


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
