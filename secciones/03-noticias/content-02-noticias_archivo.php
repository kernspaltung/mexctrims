
  <!-- seccion  archivo -->
  <section id="noticias-archivo" class="sticky-here small-12 columns p0">



    <?php get_template_part( 'secciones/00-elementos/content', '02-taxonomias' ); ?>



    <!-- lista noticias -->
    <div class="small-12 large-8 columns ha p2">


      <?php

      $q = new WP_Query( array( 'post_type'=>'post', 'posts_per_page'=>12 ) );
      if( $q -> have_posts() ) :
         while( $q -> have_posts() ) :
            $q -> the_post();

   // for temporal
      for ($i=0; $i < 24 ; $i++) {
         ?>
         <article id="noticias-contenedor-contenido" class="small-6 columns p2 h_50">



          <a href="<?php echo get_the_permalink( get_the_ID() ); ?>" class="h_100">

            <!-- Titulo noticia -->
            <div id="noticias-titulo-destacado" class="columns p2 ha text-center fontL">
              <?php echo get_the_title(); ?>
            </div><!-- Titulo noticia -->


            <!-- fecha destacada -->
            <div id="noticias-fecha" class="medium-12 columns p2 text-right fontS">
              Publicado el <?php echo get_the_date(); ?>
            </div><!-- fecha destacada -->


            <!-- Imagen destacada -->
            <div id="noticias-imagen" class="medium-5 columns h_20vh p0 ">
              <div class="h_100 imgLiquid imgLiquidFill">
                <?php echo get_the_post_thumbnail(); ?>
              </div>
            </div><!-- Imagen destacada -->


            <!-- extracto destacada -->
            <div id="noticias-extracto" class="small-8 medium-7 columns ha p2 fontXS text-left">
              <?php echo get_the_excerpt(); ?>
            </div><!-- extracto destacada -->




            <!-- ver mas destacado -->
            <div id="noticias-vermas" class="small-4 medium-7 columns ha p2 fontS text-right">
              Ver más
              <i class="fa fa-angle-right"></i>
            </div>
            <!-- ver mas destacado -->

          </a>
        </article>



      </article>

      <?php
    }// cierra for temporal

endwhile;
endif;
    ?>



  </div>
  <!-- lista noticias -->


</section>
<!-- seccion  archivo -->
