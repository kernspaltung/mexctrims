<?php
$q = new WP_Query(array('post_type'=>'enlace','posts_per_page'=>4 ) );
if( $q -> have_posts() ) :
   while( $q -> have_posts() ) :
      $q -> the_post();
?>

      <div class="enlace_destacado small-12 h_25 h_sm_50 p4">

         <a href="<?php echo get_post_meta( get_the_ID(), 'link-externo', true); ?>" target="_blank">

            <div class="h_70 tarjeta p2 white_bg">
               <div class="imagen imgLiquid imgLiquidNoFill w_100 h_100">
                  <?php echo get_the_post_thumbnail(); ?>
               </div>
            </div>
            <h6 class="texto_enlace fontXS p2 font2 secundario2_bg white text-center tarjeta">
               <?php echo get_the_content(); ?>
            </h6>

         </a>

      </div>

<?php
   endwhile;
endif;
?>
