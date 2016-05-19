<section id="noticias" class="row mt4 mb4 p5">

   <h1 class="small-12 text-left p0 mb2">
      Noticias
   </h1>
   <?php

   $destacada_inicio = get_term_by( 'name', 'Noticia Principal', 'category' );

   $q = new WP_Query( array( 'post_type'=>'post', 'posts_per_page'=>2, 'cat' => $destacada_inicio->term_id) );

   if( $q -> have_posts() ) :
      while( $q -> have_posts() ) :
         $q -> the_post();
      ?>

      <section id="noticia_destacada" class="small-12 medium-10 large-8 medium-offset-1 large-offset-2 end h_40vh mt1 mb4 p5">
         <a href="http://google.com">

            <h3 class="p2 mb1 fontXL font_sm_M text-center">
               <?php echo apply_filters( 'the_title', get_the_title() ); ?>
            </h3>

            <div class="extracto small-12 medium-6 columns p0 text-left fontL h_80">
               <div class="vcenter p4 pt0 pb0">
                  <?php echo apply_filters( 'the_excerpt', get_the_excerpt() ); ?>
               </div>
            </div>

            <div class="small-12 medium-6 columns imagen h_80 imgLiquid imgLiquidNoFill">
               <?php echo get_the_post_thumbnail( get_the_ID() ); ?>
            </div>

            <div class="w_100 h_20 text-right p5">

               <div class="button fontS mt2">
                  Ver Más
                  <i class="fa fa-plus"></i>
               </div>

            </div>

         </a>
      </section>

      <?php
            endwhile;
         endif;
       ?>

   <div id="inicio-noticias-small" class="p5 row text-center rel show-for-small-only">

      <ul class="accordion w_100" data-accordion>

         <?php

         $q = new WP_Query( array( 'post_type'=>'post', 'posts_per_page'=>2, 'category__not_in' => $destacada_inicio->term_id ) );
         if( $q -> have_posts() ) :
            while( $q -> have_posts() ) :
               $q -> the_post();

         ?>

         <li class="accordion-item p0 <?php echo $i==0 ? 'is-active' : ''; ?>" data-accordion-item>
            <a href="#" class="accordion-title p0">
               <h3 class="p2 m0 fontL font_sm_M text-left">
                  <?php echo apply_filters( 'the_title', get_the_title() ); ?>
               </h3>
            </a>
            <div class="accordion-content" data-tab-content>
               <a href="http://google.com">
                  <div class="small-12 columns imagen h_20vh imgLiquid imgLiquidFill">
                     <?php echo get_the_post_thumbnail( get_the_ID() ); ?>
                  </div>
                  <div class="extracto small-12 columns p4 text-left h_25">
                     <?php echo apply_filters( 'the_excerpt', wp_trim_words( get_the_excerpt(), 22 ) ); ?>
                  </div>
                  <div class="w_100 text-right p5">
                     <div class="button fontS mt2">
                        Ver Más
                        <div class="fa fa-plus"></div>
                     </div>
                  </div>
               </a>
            </div>
         </li>

         <?php
            endwhile;
         endif;
         ?>

      </ul>


   </div>

   <div id="inicio-noticias-medium" class="medium-10 large-8 medium-offset-1 large-offset-2 p5 mt2 text-center rel hide-for-small-only">

   </div>

</section>
