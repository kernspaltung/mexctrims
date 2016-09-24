<section id="noticias" class="row mt4 mt_sm_0 mb4 mb_sm_1 p5 p_sm_2">

   <h1 class="small-12 small-text-center medium-text-left p0 mb1 secundario2_bg p4 white">
      Noticias
   </h1>

   <?php

   $destacada_inicio = get_term_by( 'name', 'Noticia Principal', 'category' );

   $q = new WP_Query( array( 'post_type'=>'post', 'posts_per_page'=>2, 'cat' => $destacada_inicio->term_id) );

   if( $q -> have_posts() ) :
      while( $q -> have_posts() ) :
         $q -> the_post();
      ?>

      <section id="noticia_destacada" class="small-12 medium-7 large-8 h_60vh h_sm_70vh mt1 mb1 mb_sm_0  p3">
         <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="h_100 tarjeta p3 ">

            <h3 class="p2 mb1  fontXL font_sm_M small-text-center medium-text-left">
               <?php echo apply_filters( 'the_title', get_the_title() ); ?>
            </h3>

            <div class="small-12 medium-6 columns imagen h_60 h_sm_20 imgLiquid imgLiquidFill">
               <?php echo get_the_post_thumbnail( get_the_ID() ); ?>
            </div>


            <div class="extracto_fecha small-12 medium-6 columns p0 text-left h_80 h_sm_35">
               <div class="fecha small-12 columns text-right p2 p_sm_3 pt_sm_1 pb_sm_1 fontS">
                  Publicada el <?php echo get_the_date('d \d\e F\, Y',get_the_ID()); ?>
               </div>
               <div class="p4 p_sm_3 pt0 pb0 fontM font_sm_S ">
                  <?php echo apply_filters( 'the_excerpt', wp_trim_words( get_the_excerpt(), 12 ) ); ?>
               </div>

               <div class="small-12 columns h_20 text-right p5 p_sm_0">

                  <div class="button fontS mt2 mt_sm_0">
                     Ver Más
                     <i class="fa fa-plus"></i>
                  </div>

               </div>

            </div>

         </a>
      </section>

   <?php
      endwhile;
   endif;
   ?>




      <section id="inicio-noticias-medium" class="medium-5 large-4 columns p5 pt0 m0 text-center rel hide-for-small-only">


         <?php

         $q = new WP_Query( array( 'post_type'=>'post', 'posts_per_page'=>2, 'category__not_in' => $destacada_inicio->term_id ) );
         if( $q -> have_posts() ) :
            while( $q -> have_posts() ) :
               $q -> the_post();
               // echo apply_filters( 'the_title', get_the_title() );

         ?>

         <article class="noticia_destacada_secundaria_inicio small-12 columns h_30vh mb1 p3">

            <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="h_100 tarjeta">
               <h3 class="p2 m0 fontM font_sm_S text-left">
                  <?php echo apply_filters( 'the_title', get_the_title() ); ?>
               </h3>
               <div class="small-12 columns imagen h_10vh imgLiquid imgLiquidFill">
                  <?php echo get_the_post_thumbnail( get_the_ID() ); ?>
               </div>
               <div class="fecha small-12 columns text-right p2 p_sm_3 pt_sm_1 pb_sm_1 fontS">
                  Publicada el <?php echo get_the_date('d \d\e F\, Y',get_the_ID()); ?>
               </div>
               <div class="extracto small-12 columns p0 text-left h_25 fontS">
                  <?php echo apply_filters( 'the_excerpt', wp_trim_words( get_the_excerpt(), 8 ) ); ?>
               </div>
               <!-- <div class="w_100 text-right p5 pt0">
                  <div class="button fontS m0">
                     Ver Más
                     <div class="fa fa-plus"></div>
                  </div>
               </div> -->
            </a>

         </article>

         <?php
            endwhile;
         endif;
         ?>

      </section>


</section>
