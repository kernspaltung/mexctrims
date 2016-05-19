<?php

$medicos = get_page_by_title( 'Médicos' );

?>

<section id="medicos-portada" class="h_50vh small-12 columns mb3">

  <header id="medicos-portada-intro" class="small-12 columns h_100">
    <!-- (.small-5.columns.h_100>(.small-4.columns.h_100>.h_100.imgLiquid.imgLiquidFill>img[src="http://fakeimg.pl/600x300"])+.small-8.columns.h_100>.small-12.columns.fontXL.black.uppercase.vcenter{Sección Medicos})+.small-7.columns.h_100>.small-12.columns.h_50.fontXS+.small-9.columns.h_50.fontXS+button.small-3.columns.button.hollow.cursor-pointer.h_50.fontS.uppercase{Contribución} -->

   <?php get_template_part( 'secciones/00-elementos/content', '07-titulo_pagina' ); ?>

   <div id="medicos-portada-titulo-imagen" class="small-5 columns h_70 p0">
        <div class="h_100 imgLiquid imgLiquidFill">
           <?php echo get_the_post_thumbnail( get_the_ID(), 'large' ); ?>
        </div>
    </div>


    <div id="medicos-portada-intro-texto" class="small-7 columns h_70 p0">

      <div class="small-12 columns p3 pt0 vcenter text-center">
         <p class="p5 pt0 pb0">
            <?php echo apply_filters('the_content',$medicos->post_content); ?>
         </p>
         <div class="small-12 text-center">
            <div class=" button hollow cursor-pointer fontS uppercase vcenter p0">
              <a href="<?php echo get_the_permalink( get_page_by_title('Contribuye')->ID); ?>">
                 <div class="p3">
                   Contribuye
                 </div>
              </a>
            </div>
         </div>
      </div>
      <div class="small-3 columns h_100 p0">
      </div>
    </div>

  </header>  <!-- medicos-portada-intro -->




</section>
