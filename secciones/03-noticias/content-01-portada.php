<?php get_template_part( 'secciones/00-elementos/content', '07-titulo_pagina' ); ?>

<!-- entrada penultima y antepenultima -->
<!--
<section class="columns h_45vh p0 secundario_2_blanco_bg p0">

<?php
wp_reset_query();
$q = new WP_Query( array( 'post_type'=>'noticia', 'posts_per_page'=>3 ) );
if( $q -> have_posts() ) :
   while( $q -> have_posts() ) :
      $q -> the_post();

      ?>

         <article id="noticias-contenido-subdestacado" class="small-12 medium-4 columns h_40vh h_sm_70vh p2 pt0">
           <a href="<?php echo get_the_permalink( get_the_ID() ); ?>" class="tarjeta h_100 rel white_bg">


             <div id="noticias-titulo-destacado" class="columns h_30 p1 text-left fontM ">
               <?php echo get_the_title(); ?>
             </div>



             <div id="noticias-fecha" class="medium-12 h_10 columns p1 text-right fontXS">
               <?php echo get_the_date(); ?>
             </div>



             <div id="noticias-imagen" class="medium-5 columns h_60 p0 show-for-medium">
               <div class="h_100 imgLiquid imgLiquidFill">
                 <?php echo get_the_post_thumbnail(); ?>
               </div>
             </div>


             <!--
             <div id="noticias-extracto" class="small-8 medium-7 columns ha p2 pl1 fontS text-left">
               <?php echo apply_filters('the_excerpt', wp_trim_words(get_the_excerpt(),10)); ?>
             </div>




             
             <div id="noticias-vermas" class="small-6 medium-5 large-4 columns ha p2 absDownR primario_acento_bd fontS text-center">
               Ver más
               <i class="fa fa-angle-right"></i>
             </div>
             

           </a>
         </article>

      <?php


endwhile;

endif;



?>

 </section>
-->
 <!-- entrada penultima y antepenultima -->



<?php get_template_part( 'secciones/00-elementos/content','03-taxonomias_acordeon' ); ?>



</section>
