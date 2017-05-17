
  <!-- seccion  archivo -->
  <section id="noticias-archivo" class="sticky-here small-12 columns p0 pt0">

    <?php get_template_part( 'secciones/00-elementos/content', '02-taxonomias' ); ?>



    <!-- lista noticias -->
    <div class="small-12 large-8 columns ha p2 pt0">


      <?php

      $q = new WP_Query( array( 'post_type'=>'noticia', 'posts_per_page'=>12 ) );
      if( $q -> have_posts() ) :
         while( $q -> have_posts() ) :
            $q -> the_post();

   // for temporal
         ?>
         <article id="noticias-contenedor-contenido" class="small-6 columns p3 h_6x ">



          <a href="<?php echo get_the_permalink( get_the_ID() ); ?>" class="h_100 _bd rel tarjeta pt1 white_bg">

            <!-- Titulo noticia -->
            <div id="noticias-titulo-destacado" class="columns p2 pl0 pr0 ha text-left fontM">
              <?php echo get_the_title(); ?>
            </div><!-- Titulo noticia -->


            <!-- fecha destacada -->
            <div id="noticias-fecha" class="medium-12 columns p2 pl0 pr0 pt0 text-right fontXS">
              Publicado el <?php echo get_the_date(); ?>
            </div><!-- fecha destacada -->


            <!-- Imagen destacada -->
            <div id="noticias-imagen" class="columns h_40 p0 ">
              <div class="h_100 imgLiquid imgLiquidNoFill">
                <?php echo get_the_post_thumbnail(); ?>
              </div>
            </div><!-- Imagen destacada -->


            <!-- extracto destacada -->
            <div id="noticias-extracto" class="columns ha p0 pt1  fontM text-left">
              <?php echo apply_filters('the_excerpt', wp_trim_words(get_the_excerpt(),25) ); ?>
            </div><!-- extracto destacada -->




            <!-- ver mas destacado -->
            <div id="noticias-vermas" class="small-6 medium-5 large-4 columns ha p2 fontS text-center primario_acento_bd absDownR">
              Ver más
              <i class="fa fa-angle-right"></i>
            </div>
            <!-- ver mas destacado -->

          </a>
        </article>



      </article>

      <?php

endwhile;
endif;
    ?>



  </div>
  <!-- lista noticias -->


</section>
<!-- seccion  archivo -->
