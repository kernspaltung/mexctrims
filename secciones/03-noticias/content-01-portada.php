<?php get_template_part( 'secciones/00-elementos/content', '07-titulo_pagina' ); ?>

<section id="noticia-destacada" class="small-12 medium-7 columns h_80vh p0 secundario_blanco_bg">


   <?php

   $q = new WP_Query( array( 'post_type'=>'post', 'posts_per_page'=>1 ) );
   if( $q -> have_posts() ) :
      while( $q -> have_posts() ) :
         $q -> the_post();

   ?>

 <!-- contenido destacado-->
 <article id="noticias-contenido-destacado" class="small-12 columns h_70vh p5">


   <a href="<?php echo get_the_permalink( get_the_ID() ); ?>" class="tarjeta primario_acento_bd h_100 p5 rel">
     <!-- Titulo noticia -->
     <div id="noticias-titulo-destacado" class="columns p3 text-center fontL">
       <?php echo get_the_title(); ?>
     </div><!-- Titulo noticia -->



     <!-- fecha destacada -->
     <div id="noticias-fecha" class="small-12 columns h_10 p2 text-right fontS">
       <?php echo get_the_date(); ?>
     </div><!-- fecha destacada -->


     <!-- Imagen destacada -->
     <div id="noticias-imagen" class="small-12 medium-6 columns h_70 p0">
       <div class="h_100 imgLiquid imgLiquidFill">
         <?php echo get_the_post_thumbnail(); ?>
       </div>
     </div><!-- Imagen destacada -->


     <!-- extracto destacada -->
     <div id="noticias-extracto" class="small-12 medium-6 columns ha p4 fontM text-left ">
       <p>
          <?php echo get_the_excerpt(); ?>
       </p>
     </div><!-- extracto destacada -->


     <!-- ver mas destacado -->
     <div id="noticias-vermas" class="small-3 columns h_a text-middle p2 fontS text-center absDownR p3 primario_acento_bd">
          Ver más
         <i class="fa fa-angle-right"></i>

     </div>
     <!-- ver mas destacado -->

   </a>

 </article>
 <!-- contenido destacado-->



<?php

   endwhile;

endif;

?>

</section>



 <!-- entrada penultima y antepenultima -->
 <section class="small-12 medium-5 columns  h_80vh p0 secundario_2_blanco_bg p0">


<?php
wp_reset_query();
$q = new WP_Query( array( 'post_type'=>'post', 'posts_per_page'=>2 ) );
if( $q -> have_posts() ) :
   while( $q -> have_posts() ) :
      $q -> the_post();

      ?>
         <!-- 1 -->
         <article id="noticias-contenido-subdestacado" class="small-12 columns h_35vh h_sm_33 p3 ">
           <a href="<?php echo get_the_permalink( get_the_ID() ); ?>" class="tarjeta h_100 rel primario_acento_bd">

             <!-- Titulo noticia -->
             <div id="noticias-titulo-destacado" class="columns p1 ha text-left fontM">
               <?php echo get_the_title(); ?>
             </div><!-- Titulo noticia -->


             <!-- fecha destacada -->
             <div id="noticias-fecha" class="medium-12 columns p1 text-right fontXS">
               <?php echo get_the_date(); ?>
             </div><!-- fecha destacada -->


             <!-- Imagen destacada -->
             <div id="noticias-imagen" class="medium-5 columns h_50 p0 show-for-medium">
               <div class="h_100 imgLiquid imgLiquidNoFill">
                 <?php echo get_the_post_thumbnail(); ?>
               </div>
             </div><!-- Imagen destacada -->


             <!-- extracto destacada -->
             <div id="noticias-extracto" class="small-8 medium-7 columns ha p2 pl1 fontS text-left">
               <?php echo apply_filters('the_excerpt', wp_trim_words(get_the_excerpt(),18)); ?>
             </div><!-- extracto destacada -->




             <!-- ver mas destacado -->
             <div id="noticias-vermas" class="small-4 medium-3 large-2 columns ha p2 absDownR primario_acento_bd fontS text-center">
               Ver más
               <i class="fa fa-angle-right"></i>
             </div>
             <!-- ver mas destacado -->

           </a>
         </article>

      <?php


endwhile;

endif;



?>

 </section>
 <!-- entrada penultima y antepenultima -->



<?php get_template_part( 'secciones/00-elementos/content','03-taxonomias_acordeon' ); ?>



</section>
