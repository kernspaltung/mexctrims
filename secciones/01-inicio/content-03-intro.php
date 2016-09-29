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

      switch( $bullet -> post_title  ) {

         case "Información":
            $color_bg   = "secundario1_bg";
            break;
         case "Noticias":
            $color_bg   = "secundario2_bg";
            break;
         case "Descargables":
            $color_bg   = "secundario3_bg";
            break;

      }

   ?>


   <div class="small-12 medium-4 columns text-center m0  h_35vh h_sm_50vh p4">
      <div class="columns h_100 <?php echo $color_bg; ?> tarjeta black p4 pt0 pb0">

            <div class="vcenter">
               <a href="<?php echo get_the_permalink($bullet->ID); ?>" class="w_100 h_100 m0 white txsh1 ">
               <div class="titulo mt2 mb1">
                  <i class="fa fa-<?php echo $iconos[$i]; ?> fontXXL white"></i>
                  <h5 class="font2">
                     <?php echo get_the_title( $bullet->ID ); ?>
                  </h5>
               </div>
               <div class="extracto p0  fontL">
                  <?php echo $bullet->post_excerpt; ?>
               </div>
               </a>
            </div>

   </div>
   </div>

   <?php $i++; endforeach; ?>

</section>
