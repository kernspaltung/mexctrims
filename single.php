<?php

get_header();

?>


<div class="columns h_100 p0">



  <!-- Categorias large -->
  <aside id="noticias-aside-large" class="h_100 large-4 columns show-for-large ha" data-sticky-container>
   <div class="sticky h_75vh fontM" data-sticky data-anchor="plantillas" data-margin-top="9">

    <h2 class="columns fontL p3 text-center">Categorias</h2>

    <ul id="noticias-tags-lista" class="menu small-12 columns p0 h_20vh scrollH">
      <?php
      for ($i=0; $i < 12; $i++) {
        echo  '<a href="">
          <li class="small-4 columns fontXXS p3 text-center">Categoría' . $i . '</li>
        </a>';
      }
      ?>
    </ul>


  <!-- Etiquetas large -->
    <h2 class="columns fontL p3 text-center">Etiquetas</h2>

    <ul id="noticias-tags-lista" class="menu small-12 columns p0 h_20vh scrollH">
      <?php
      for ($i=0; $i < 24; $i++) {
        echo  '<a href="">
          <li class="small-4 columns fontXXS p3 text-center">Etiqueta' . $i . '</li>
        </a>';
      }
      ?>
    </ul>

   </div>
  </aside>
  <!-- Etiquetas large -->
  <!-- Categorias large -->



  <!-- contenido -->
  <article id="single-contenedor-contenido" class="small-12 large-8 columns scrollH">



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



    <div id="single-contenido-entrada" class="small-12 columns p6 text-left">


        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam repudiandae quaerat nulla nobis eum inventore est ex. Delectus ab perspiciatis deserunt dolore?</p>
        <p>Rerum nobis sed cupiditate tenetur voluptates, delectus cum cumque molestias ducimus maxime omnis, neque quaerat id quod aperiam dolorum commodi voluptatum velit.</p>


        <img src="http://fakeimg.pl/500x420" alt="">


       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam repudiandae quaerat nulla nobis eum inventore est ex. Delectus ab perspiciatis deserunt dolore?</p>
       <p>Rerum nobis sed cupiditate tenetur voluptates, delectus cum cumque molestias ducimus maxime omnis, neque quaerat id quod aperiam dolorum commodi voluptatum velit.</p>


       <img src="http://fakeimg.pl/500x420" alt="">



        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam repudiandae quaerat nulla nobis eum inventore est ex. Delectus ab perspiciatis deserunt dolore?</p>
        <p>Rerum nobis sed cupiditate tenetur voluptates, delectus cum cumque molestias ducimus maxime omnis, neque quaerat id quod aperiam dolorum commodi voluptatum velit.</p>


        <img src="http://fakeimg.pl/500x420" alt="">


       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam repudiandae quaerat nulla nobis eum inventore est ex. Delectus ab perspiciatis deserunt dolore?</p>
       <p>Rerum nobis sed cupiditate tenetur voluptates, delectus cum cumque molestias ducimus maxime omnis, neque quaerat id quod aperiam dolorum commodi voluptatum velit.</p>


       <img src="http://fakeimg.pl/500x420" alt="">



        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam repudiandae quaerat nulla nobis eum inventore est ex. Delectus ab perspiciatis deserunt dolore?</p>
        <p>Rerum nobis sed cupiditate tenetur voluptates, delectus cum cumque molestias ducimus maxime omnis, neque quaerat id quod aperiam dolorum commodi voluptatum velit.</p>


        <img src="http://fakeimg.pl/500x420" alt="">


       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam repudiandae quaerat nulla nobis eum inventore est ex. Delectus ab perspiciatis deserunt dolore?</p>
       <p>Rerum nobis sed cupiditate tenetur voluptates, delectus cum cumque molestias ducimus maxime omnis, neque quaerat id quod aperiam dolorum commodi voluptatum velit.</p>


       <img src="http://fakeimg.pl/500x420" alt="">




    </div>

  </article>
  <!-- contenido -->





</div>
<?php

get_footer();

?>
