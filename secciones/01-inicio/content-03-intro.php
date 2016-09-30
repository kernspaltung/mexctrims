<?php

$introduccion = get_page_by_title('Introducción');
$secciones = get_page_by_title('Secciones');
$bullets = get_pages(array( 'child_of' => $secciones -> ID, 'parent' => $secciones -> ID, 'sort_column' => 'menu_order' ));
$iconos = array( 'question', 'newspaper-o', 'download','check-square-o');

?>

<section id="inicio-introduccion" class="small-12 end text-center rel mt0 mt_sm_0 h_60vh h_sm_70vh">

   <div class="small-12 columns row h_100 text-left fontM p0 p_sm_1">
      <div class="small-12 small-push-12 medium-7 columns p3 p_sm_1 h_sm_50 h_md_50">
        <div class="vcenter text-left font_sm_L font_md_M font_lg_L bold">
           <?php echo apply_filters('the_title', $introduccion->post_title ); ?>
        </div>
         <div class="vcenter font_sm_S font_md_M font_lg_L">
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

<section id="inicio_bullets" class="expanded row h_100 text-center rel mt2 mb2">


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


   <div class="small-12 medium-4 columns text-center m0 h_sm_50vh h_md_40vh h_lg_25vh p2">
      <div class="columns h_100 <?php echo $color_bg; ?> tarjeta black p4 pt0 pb0">

            <div class="vcenter">
               <a href="<?php echo get_the_permalink($bullet->ID); ?>" class="w_100 h_100 m0 white txsh1 ">
               <div class="titulo mt1 mb0">
                  <i class="fa fa-<?php echo $iconos[$i]; ?> font_sm_XXL font_md_M font_lg_L white"></i>
                  <h5 class="font2 font_sm_L font_md_M font_lg_L">
                     <?php echo get_the_title( $bullet->ID ); ?>
                  </h5>
               </div>
               <div class="extracto p0 font_sm_L font_md_S font_lg_M">
                  <?php echo $bullet->post_excerpt; ?>
               </div>
               </a>
            </div>

   </div>
   </div>

   <?php $i++; endforeach; ?>

</section>
