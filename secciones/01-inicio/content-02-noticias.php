<section id="noticias" class="row  mt_sm_0 mb4 mb_sm_1 p5 pt0 p_sm_2">

   <h3 class="small-12 small-text-center medium-text-left p0 mb1 secundario2_bg white p2 ">
      Noticias
   </h3>

   <section id="twitter" class="columns hide-for-small-only medium-6 h_7x white_bg mt1 scrollH">
      <a class="twitter-timeline" data-lang="es" data-link-color="#19CF86" href="https://twitter.com/mexctrims">Tweets by mexctrims</a>
      <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
   </section>

   <section id="noticias" class="columns medium-12 large-6">

      <?php

      $destacada_inicio = get_term_by( 'name', 'Noticia Principal', 'category' );

      $q = new WP_Query( array( 'post_type'=>'noticia', 'posts_per_page'=>2, 'cat' => $destacada_inicio->term_id ) );

      if( $q -> have_posts() ) :
         while( $q -> have_posts() ) :
            $q -> the_post();
            ?>

            <section id="noticia_destacada" class="columns h_sm_5x m0  p3 p_sm_0">
               <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="h_100 tarjeta  white_bg p4 ">


                  <h6 class="p0 mb1 font_sm_L font_md_L font_lg_L small-text-center medium-text-left">
                     <?php echo apply_filters( 'the_title', get_the_title() ); ?>
                  </h6>

                  <div class="fecha columns p0 pb1 p_sm_3 pt_sm_1 pb_sm_1 font_sm_XS font_sm_S font_lg_M text-left">
                     Publicada el <?php echo get_the_date('d \d\e F\, Y',get_the_ID()); ?>
                  </div>

                  <div class="imagen small-12 medium-6 columns imagen h_60 h_sm_40 imgLiquid imgLiquidFill">
                     <?php echo get_the_post_thumbnail( get_the_ID() ); ?>
                  </div>

                  <div class="extracto_fecha small-12 medium-6 columns p0 pl2 pl_sm_0 text-left h_80 h_sm_35">
                     <div class="columns p0 pt_sm_3 pt0 pb0 font_sm_M font_md_M font_lg_M">
                        <?php echo apply_filters( 'the_excerpt', wp_trim_words( get_the_excerpt(), 25 ) ); ?>
                     </div>

                  </div>

               </a>
            </section>

            <?php
         endwhile;
      endif;
      ?>






      <?php

      $q = new WP_Query( array( 'post_type'=>'post', 'posts_per_page'=>2, 'category__not_in' => $destacada_inicio->term_id ) );
      if( $q -> have_posts() ) :
         while( $q -> have_posts() ) :
            $q -> the_post();
            // echo apply_filters( 'the_title', get_the_title() );

            ?>

            <article class="noticia_destacada_secundaria_inicio small-12 medium-6 columns h_50vh p2 pt0 p_sm_0 mt_sm_1">

               <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="h_100 tarjeta white_bg p3">
                  <h3 class="p0 pb1 m0 font_sm_M font_md_M font_lg_M text-left">
                     <?php echo apply_filters( 'the_title', get_the_title() ); ?>
                  </h3>
                  <div class="small-12 columns imagen h_50 h_md_60 imgLiquid imgLiquidFill ">
                     <?php echo get_the_post_thumbnail( get_the_ID() ); ?>
                  </div>
                  <div class="fecha columns text-right p0 p_sm_3 pt_2 pb_sm_1 font_sm_XS font_md_S font_lg_M">
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


<div class="columns small-12 h_10 text-right p2 pr1 m0 mt2 mb2">

   <a href="<?php echo get_the_permalink( get_page_by_title("Noticias")->ID ); ?>">
      <div class="button p3 primario_acento_bd fontS tarjeta primario_acento_bg_hover complementario_hover">
         Ver Más Noticias
         <i class="fa fa-plus"></i>
      </div>
   </a>

</div>
</section>

</section>
