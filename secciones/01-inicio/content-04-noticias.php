<section id="noticias" class="row mt4 mb4 p5">

   <h4 class="small-12 text-left p0">
      Noticias
   </h4>

   <div id="inicio-noticias-small" class="p5 row text-center rel show-for-small-only">

      <ul class="accordion w_100" data-accordion>

         <?php

         $q = new WP_Query( array( 'post_type'=>'post', 'posts_per_page'=>12 ) );
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
                  <div class="extracto small-12 columns p4 text-left fontS">
                     <?php echo apply_filters( 'the_excerpt', get_the_excerpt() ); ?>
                  </div>
                  <div class="small-12 columns imagen h_20vh imgLiquid imgLiquidNoFill">
                     <?php echo get_the_post_thumbnail( get_the_ID() ); ?>
                  </div>
                  <div class="w_100 text-right mt2">
                     <div class="button fontS">
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

   <div id="inicio-noticias-medium" class="p5 row text-center rel hide-for-small-only">

   </div>

</section>
