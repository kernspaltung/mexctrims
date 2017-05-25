<?php

$informacion = get_page_by_title( 'Información' );
$paginas = get_pages( array( 'child_of' => get_the_ID() ) );

?>

<div class="w_100 h_15vh">
   <div class="vcenter p3 pt0 pb0">
      <h3>Información sobre la Esclerosis Múltiple</h3>
   </div>
</div>


<!-- (h1>lorem9^+p>lorem10^+h2>lorem9^+(p>lorem18)*3)*4 -->

<section id="info-menu" class="small-12 columns h_45vh h_sm_70vh mt_sm_2 pb_sm_4">

   <?php
   $iconos = array( 'neurona2', 'nodo', 'cerebro', 'red2' );
   $i = 0;
   foreach( $paginas as $pagina ) :
      $icono = $iconos[$i];
      ?>

      <div class="medium-6 large-4 w_20 columns h_50 h_sm_20 text-center p4 boton-info">
         <a href="<?php echo get_the_permalink( $pagina -> ID ); ?>" class="h_100 w_100 tarjeta secundario<?php echo ($i%3)+1; ?>_bg ">
            <div class="vcenter neutral_oscuro icono">
               <!-- <div class="w_100 h_5vh imgLiquid imgLiquidNoFill mb1">
                  <img src="<?php echo get_stylesheet_directory_uri() . '/img/iconos/' . $icono . '.png'; ?>"></i>
               </div> -->
               <h5 class="w_100 white"><?php echo get_the_title( $pagina->ID ); ?></h5>
               <!-- <p><?php # echo get_the_excerpt( $pagina->ID ); ?></p> -->
            </div>
         </a>
      </div>

      <?php
      $i++;
   endforeach; ?>

</section>
