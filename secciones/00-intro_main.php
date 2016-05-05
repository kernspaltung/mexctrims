<?php

if( is_front_page() ) :

   include_once '01-inicio/01-a-portada.php';

endif;



if( is_single() ) :

   ?>

   <section id="portada-entrada" class="row expanded h_75vh">

           <!-- barra de regreso -->
           <div id="single-boton-regresa" class="columns p2 h_10" data-sticky-container>
            <div class="sticky row small-12" data-sticky data-anchor="plantillas" data-margin-top="5">
               <a href="#" class="minH_100">
                  <div class="small-2 columns p1 pl0 text-center">
                    <i class="fa fa-angle-left"></i>
                  </div>
                  <div class="small-10 columns p1 pl0 text-left fontM">
                    Regresar a Noticias
                  </div>
               </a>
            </div>
           </div><!-- barra de regreso -->




               <!-- Imagen destacada -->
               <div id="single-imagen" class="imagen_destacada row small-12 h_60 imgLiquid imgLiquidFill p0">
                 <div class="small-12 expanded h_100 imgLiquid imgLiquidFill">
                   <img src="http://fakeimg.pl/1600x720" alt="">
                 </div>
               </div><!-- Imagen destacada -->


            <!-- Titulo single -->
            <div id="single-titulo" class="columns h_20 p0">
                <div class="vcenter ha">
                  <h1>Título completo de la entrada</h1>
                </div>
            </div><!-- Titulo single -->


   </section>
   <?php

endif;

?>
