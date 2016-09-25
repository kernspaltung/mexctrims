<?php
get_template_part( 'secciones/00-elementos/content', '07-titulo_pagina' );

$descargables = get_page_by_title("Descargables");


?>

<div id="descargables-imagen" class="absUpL w_100 h_60vh z-1">
   <div class="imagen imgLiquid imgLiquidFill h_100">
      <?php echo get_the_post_thumbnail($descargables->ID,'full'); ?>
   </div>
</div>
<div id="descargables-texto-1" class="columns h_1 p5 mb1">
   <!-- informacion y thumb -->
   <div class="informacion-texto-1 large-6 large-offset-3 end columns h_a p4 secundario3_bd tarjeta white_bg">
      <?php echo apply_filters('the_content',$descargables->post_content); ?>
   </div>
</div>
