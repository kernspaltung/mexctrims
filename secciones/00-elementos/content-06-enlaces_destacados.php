<?php
$q = new WP_Query(array('post_type'=>'enlace','posts_per_page'=>3 ) );
if( $q -> have_posts() ) :
   while( $q -> have_posts() ) :
      $q -> the_post();
?>

      <div class="small-12 h_33 p4">
         <a href="<?php echo get_post_meta( get_the_ID(), 'link-externo', true); ?>" target="_blank">
            <div class="imagen imgLiquid imgLiquidFill h_60">
               <?php echo get_the_post_thumbnail(); ?>
            </div>
            <h6 class="fontS p2">
               <?php echo get_the_content(); ?>
            </h6>
         </a>
      </div>

<?php
   endwhile;
endif;
?>
