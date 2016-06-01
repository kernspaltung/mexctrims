<?php

$introduccion = get_page_by_title('Introducción');
$secciones = get_page_by_title('Secciones');
$bullets = get_pages(array( 'child_of' => $secciones -> ID, 'parent' => $secciones -> ID, 'sort_column' => 'menu_order' ));
$iconos = array( 'question', 'newspaper-o', 'download','check-square-o');

?>

<section id="inicio-introduccion" class="small-12 medium-10 medium-offset-1 end text-center rel mt2 mt_sm_0 h_60vh h_sm_90vh">

   <div class="small-12 columns row h_60vh text-left fontM p5 p_sm_1">
      <div class="small-12 small-push-12 medium-7 columns p5 p_sm_1 h_100">
         <div class="vcenter font_sm_S">
            <?php echo apply_filters('the_content', $introduccion->post_content ); ?>
         </div>
      </div>
      <div class="medium-5 columns h_100 h_sm_50">
         <div class="h_100 small-12 imgLiquid imgLiquidFill">
            <?php echo get_the_post_thumbnail($introduccion->ID); ?>
         </div>
      </div>
   </div>
</section>

<section id="inicio_bullets" class="expanded row h_100 text-center rel mt4 mb4">


   <?php
   $i=0;
   foreach ($bullets as $bullet ) :

      $color='';

      if($bullet -> post_title == "Información" )
         $color = "secundario1_bg";
      if($bullet -> post_title == "Noticias" )
         $color = "secundario2_bg";
      if($bullet -> post_title == "Descargables" )
         $color = "secundario3_bg";
   ?>


   <div class="medium-4 columns text-center m0  h_35vh <?php echo $color; ?> black">

         <div class="vcenter">
            <a href="<?php echo get_the_permalink($bullet->ID); ?>" class="w_100 h_100 m0">
            <div class="titulo mt2 mb2">
               <i class="fa fa-<?php echo $iconos[$i]; ?> fontXXL white"></i>
               <h5>
                  <?php echo get_the_title( $bullet->ID ); ?>
               </h5>
            </div>
            <div class="extracto p0 fontM">
               <div class="vcenter p5 pt0 ">
                  <?php echo apply_filters( 'the_content', $bullet->post_content ); ?>
               </div>
            </div>
            </a>
         </div>

   </div>

   <?php $i++; endforeach; ?>

</section>
