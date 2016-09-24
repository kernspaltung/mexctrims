<?php
$q = new WP_Query(array('post_type'=>'enlace','posts_per_page'=>4 ) );
if( $q -> have_posts() ) :
   while( $q -> have_posts() ) :
      $q -> the_post();
?>

      <div class="enlace_destacado small-12 h_25 p4">
         <a href="<?php echo get_post_meta( get_the_ID(), 'link-externo', true); ?>" target="_blank">
            <div class="imagen imgLiquid imgLiquidFill h_70 tarjeta">
               <?php echo get_the_post_thumbnail(); ?>
            </div>
            <h6 class="texto_enlace fontXS p1 secundario2_bg white text-center tarjeta">
               <?php echo get_the_content(); ?>
            </h6>
         </a>
      </div>

<?php
   endwhile;
endif;
?>
