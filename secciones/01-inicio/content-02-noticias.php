<section id="noticias" class="row  mt_sm_0 mb4 mb_sm_1 p5 p_sm_2">

   <h3 class="small-12 small-text-center medium-text-left p0 mb1 secundario2_bg white p2 ">
      Noticias
   </h3>

   <section id="twitter" class="columns hide-for-small-only medium-6 h_70vh white_bg mt1">
      <div class="vcenter columns small-6 small-offset-3 end text-center p5 primario_acento_bd tarjeta">
         <div class="columns">
            proximamente:
         </div>
         <div class="columns">
            twitter
         </div>
         <div class="columns">
            @mexctrims
         </div>
         <div class="columns text-center fontL">
            <i class="fa fa-twitter"></i>
         </div>
      </div>
   </section>

   <section id="noticias" class="columns hide-for-small-only medium-6 h_60vh ">

      <?php

      $destacada_inicio = get_term_by( 'name', 'Noticia Principal', 'category' );

      $q = new WP_Query( array( 'post_type'=>'post', 'posts_per_page'=>2, 'cat' => $destacada_inicio->term_id) );

      if( $q -> have_posts() ) :
         while( $q -> have_posts() ) :
            $q -> the_post();
            ?>

            <section id="noticia_destacada" class="columns h_35vh h_sm_70vh m0  p3">
               <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="h_100 tarjeta  white_bg p4 ">

                  <h6 class="p0 mb1  fontL font_sm_M small-text-center medium-text-left">
                     <?php echo apply_filters( 'the_title', get_the_title() ); ?>
                  </h6>

                  <div class="fecha columns p0 pb1 p_sm_3 pt_sm_1 pb_sm_1 fontS text-left">
                     Publicada el <?php echo get_the_date('d \d\e F\, Y',get_the_ID()); ?>
                  </div>

                  <div class="imagen small-12 medium-6 columns imagen h_50 h_sm_20 imgLiquid imgLiquidFill">
                     <?php echo get_the_post_thumbnail( get_the_ID() ); ?>
                  </div>

                  <div class="extracto_fecha small-12 medium-6 columns p0 text-left h_80 h_sm_35">
                     <div class="columns p3 p_sm_3 pt0 pb0 fontM font_sm_S ">
                        <?php echo apply_filters( 'the_excerpt', wp_trim_words( get_the_excerpt(), 12 ) ); ?>
                     </div>

                  </div>

               </a>
            </section>

            <?php
         endwhile;
      endif;
      ?>




      <section id="inicio-noticias-medium" class="columns p0 pt0 m0 text-center rel hide-for-small-only">


         <?php

         $q = new WP_Query( array( 'post_type'=>'post', 'posts_per_page'=>2, 'category__not_in' => $destacada_inicio->term_id ) );
         if( $q -> have_posts() ) :
            while( $q -> have_posts() ) :
               $q -> the_post();
               // echo apply_filters( 'the_title', get_the_title() );

               ?>

               <article class="noticia_destacada_secundaria_inicio small-12 medium-6 columns h_30vh p3 pt0">

                  <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="h_100 tarjeta white_bg p3">
                     <h3 class="p0 pb1 m0 fontM font_sm_S text-left">
                        <?php echo apply_filters( 'the_title', get_the_title() ); ?>
                     </h3>
                     <div class="small-12 columns imagen h_10vh imgLiquid imgLiquidFill ">
                        <?php echo get_the_post_thumbnail( get_the_ID() ); ?>
                     </div>
                     <div class="fecha columns text-right p0 p_sm_3 pt_2 pb_sm_1 fontXS">
                        Publicada el <?php echo get_the_date('d \d\e F\, Y',get_the_ID()); ?>
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


   <div class="columns h_10 text-right p2 pr1 m0">

      <a href="<?php echo get_the_permalink( get_page_by_title("Noticias")->ID ); ?>">
         <div class="button p3 primario_acento_bd fontS tarjeta primario_acento_bg_hover complementario_hover">
            Ver Más
            <i class="fa fa-plus"></i>
         </div>
      </a>

   </div>
</section>

</section>
