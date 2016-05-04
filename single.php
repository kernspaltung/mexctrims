<?php

get_header();

?>


<div class="columns h_100 p0">


  <!-- barra de regreso -->
  <div id="single-boton-regresa" class="columns p2">
    <a href="#" class="minH_100">
      <div class="small-2 columns p1 pl0 text-center">
        <i class="fa fa-angle-left"></i>
      </div>
      <div class="small-10 columns p1 pl0 text-left fontM">
        Regresar a Noticias
      </div>
    </a>
  </div><!-- barra de regreso -->


  <!-- Titulo single -->
  <div id="single-titulo" class="columns p0">
    <a href="#" class="minH_100">
      <div class="small-12 columns p3 text-center fontL">
        Título completo de la entrada
      </div>
      <div id="single-subtitulo-small-medium" class="columns p3 text-left fontXS subheader hide-for-large">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      </div>
    </a>
  </div><!-- Titulo single -->



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



  <!-- contenido -->
  <article id="single-contenedor-contenido" class="small-12 large-8 columns scrollH">


    <!-- Imagen destacada -->
    <div id="single-imagen" class="large-12 columns h_30vh p0">
      <div class="h_100 imgLiquid imgLiquidFill">
        <img src="http://fakeimg.pl/600x420" alt="">
      </div>
    </div><!-- Imagen destacada -->



    <!-- Categorias movil -->
    <ul id="single-categorias-small-medium" class="small-12 columns p0 accordion mt2 hide-for-large" data-accordion>

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



    <div id="single-contenido-entrada" class="small-12 columns p4 text-left">
      <div class="small-12 columns p4 fontM">

        <div>Dolorem vel fugiat commodi dicta incidunt veritatis distinctio accusamus earum quisquam reiciendis facilis blanditiis quidem magnam similique totam, nostrum maiores soluta voluptas, ratione! Fugit dolor velit, rerum, et officiis ab!</div>
        <div>Dolorem vel fugiat commodi dicta incidunt veritatis distinctio accusamus earum quisquam reiciendis facilis blanditiis quidem magnam similique totam, nostrum maiores soluta voluptas, ratione! Fugit dolor velit, rerum, et officiis ab!</div>

        <div id="single-contenido-imagen" class="large-12 columns h_30vh p4">
          <div class="h_100 imgLiquid imgLiquidFill">
            <img src="http://fakeimg.pl/500x420" alt="">
          </div>
        </div>

        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quidem omnis possimus beatae tempora dolorem ipsa sapiente, vitae impedit sequi nisi, porro doloribus expedita dolore accusamus atque dignissimos quod eum.</div>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quidem omnis possimus beatae tempora dolorem ipsa sapiente, vitae impedit sequi nisi, porro doloribus expedita dolore accusamus atque dignissimos quod eum.</div>

        <div id="single-contenido-imagen" class="large-12 columns h_30vh p4">
          <div class="h_100 imgLiquid imgLiquidFill">
            <img src="http://fakeimg.pl/500x420" alt="">
          </div>
        </div>
      </div>

    </div>

  </article>
  <!-- contenido -->





</div>
<?php

get_footer();

?>
