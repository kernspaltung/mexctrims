<?php
$medicos_intro = get_page_by_title('Introducción Médicos');
$medicos = get_page_by_title('Médicos');
?>

<section id="inicio-medicos" class="row h_50vh h_sm_80vh mt3 mb4">

   <h1 class="small-12 columns mb2 text-left">
      Médicos
   </h1>

   <div class="imagen small-12 medium-6 columns h_90 h_sm_50 imgLiquid imgLiquidNoFill">
      <?php echo get_the_post_thumbnail( $medicos_intro -> ID ); ?>
   </div>

   <div class="texto small-12 medium-6 columns h_100 h_sm_50">
      <div class="vcenter">

         <?php echo apply_filters( 'the_excerpt', $medicos_intro -> post_content ); ?>

         <?php
            $medicos = get_page_by_title("Médicos");
         ?>
         <a href="<?php echo get_the_permalink( $medicos -> ID ); ?>" class="button hollow">
            Ir a la Sección de Médicos
         </a>

      </div>
   </div>

</section>
