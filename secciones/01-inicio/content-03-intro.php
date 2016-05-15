<?php

$introduccion = get_page_by_title('Introducción');
$secciones = get_page_by_title('Secciones');
$bullets = get_pages(array( 'child_of' => $secciones -> ID, 'parent' => $secciones -> ID ));

?>

<section class="row text-center rel mt2">

   <div class="small-12 columns row h_60vh text-left fontM p5 p_sm_1">
      <div class="small-12 medium-7 columns p5 p_sm_1 h_100">
         <div class="vcenter">

            <?php echo apply_filters('the_content', $introduccion->post_content ); ?>

         </div>
      </div>
      <div class="hide-for-small-only medium-5 columns h_100">
         <div class="h_100 row imgLiquid imgLiquidFill">
            <?php echo get_the_post_thumbnail($introduccion->ID); ?>
         </div>
      </div>
   </div>
</section>

<section id="inicio_bullets" class="row h_100 text-center rel mt2">


   <?php foreach ($bullets as $bullet ) { ?>

   <div class="medium-4 columns h_100 text-center m0 p0 mt_sm_2 h_30vh">
      <a href="<?php echo get_the_permalink($bullet->ID); ?>" class="w_100 h_100">

         <div class="titulo h_40 p5">
            <i class="fa fa-circle-o fontXL"></i>
            <h5>
               <?php echo get_the_title( $bullet->ID ); ?>
            </h5>
         </div>
         <div class="extracto p5 fontM h_60">
            <div class="vcenter">
               <?php echo apply_filters( 'the_content', $bullet->post_content ); ?>
            </div>
         </div>

      </a>
   </div>

   <?php } ?>




</section>