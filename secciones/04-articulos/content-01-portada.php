<?php
get_template_part( 'secciones/00-elementos/content', '07-titulo_pagina' );

$articulos = get_page_by_title("Artículos");


?>

<div id="articulos-imagen" class="absUpL w_100 h_60vh z-1">
   <div class="imagen imgLiquid imgLiquidFill h_100">
      <?php echo get_the_post_thumbnail($articulos->ID,'full'); ?>
   </div>
</div>
<div id="articulos-texto-1" class="columns h_1 p5 mb1">
   <!-- informacion y thumb -->
   <div class="informacion-texto-1 large-6 large-offset-3 end columns h_a p4 secundario3_bd tarjeta white_bg">
      <?php echo apply_filters('the_content',$articulos->post_content); ?>
   </div>
</div>
