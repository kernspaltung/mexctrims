<?php

$informacion = get_page_by_title( 'Información' );
$paginas = get_pages( array( 'child_of' => get_the_ID() ) );

?>

<div class="w_100 h_15vh">
   <div class="vcenter p3 pt0 pb0">
      <h3>Información sobre la Esclerosis Múltiple</h3>
   </div>
</div>

<section id="info-intro" class="small-12 medium-6 columns h_45vh">
   <!-- .imagen.small-6.columns.h_100.imgLiquid.imgLiquidFill>img[http://fakeimg.pl/300x600] -->
   <div class="imagen small-12 columns h_100 imgLiquid imgLiquidFill mb2">
      <?php echo get_the_post_thumbnail( $informacion->ID, 'large'); ?>
   </div>
   <div class="texto small-12 large-10 large-offset-1 h_a p5 pb0">
      <div class="p5">
         <?php # echo apply_filters('the_content', $informacion->post_content ); ?>
      </div>
   </div>

</section>

<!-- (h1>lorem9^+p>lorem10^+h2>lorem9^+(p>lorem18)*3)*4 -->

<section id="info-menu" class="small-12 medium-6 columns h_45vh mt_sm_2 ">

   <?php
   $iconos = array( 'neurona2', 'nodo', 'cerebro', 'red2' );
   $i = 0;
   foreach( $paginas as $pagina ) :
      $icono = $iconos[$i];
      ?>

      <div class="small-12 medium-6 columns h_50 h_sm_50 text-center p3">
         <a href="<?php echo get_the_permalink( $pagina -> ID ); ?>" class="h_100 w_100 tarjeta white_bg">
            <div class="vcenter neutral_oscuro icono">
               <div class="w_100 h_5vh imgLiquid imgLiquidNoFill mb1">
                  <img src="<?php echo get_stylesheet_directory_uri() . '/img/iconos/' . $icono . '.png'; ?>"></i>
               </div>
               <h4 class="w_100 "><?php echo get_the_title( $pagina->ID ); ?></h4>
               <p><?php # echo get_the_excerpt( $pagina->ID ); ?></p>
            </div>
         </a>
      </div>

      <?php
      $i++;
   endforeach; ?>

</section>
