<?php
$medicos_intro = get_page_by_title('Introducción Médicos');
$medicos = get_page_by_title('Médicos');
?>

<section id="inicio-medicos" class="row h_50vh mt3 mb4">

   <h1 class="small-12 columns mb2 text-left">
      Médicos
   </h1>

   <div class="imagen small-6 columns h_100 imgLiquid imgLiquidNoFill">
      <?php echo get_the_post_thumbnail( $medicos_intro -> ID ); ?>
   </div>

   <div class="texto small-6 columns h_100">
      <div class="vcenter">

         <?php echo apply_filters( 'the_excerpt', $medicos_intro -> post_content ); ?>

         <div class="button hollow">
            Registro
         </div>
         <div class="button hollow">
            Ingreso
         </div>
      </div>
   </div>

</section>
