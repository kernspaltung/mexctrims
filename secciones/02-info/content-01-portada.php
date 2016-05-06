<?php

   $paginas = get_pages( array( 'child_of' => get_the_ID() ) );

?>

<div class="w_100 h_15vh">
   <div class="vcenter p3 pt0 pb0">
      <h3>Información sobre la Esclerosis Múltiple</h3>
   </div>
</div>

<section id="info-intro" class="medium-6 columns h_55vh">
   <!-- .imagen.small-6.columns.h_100.imgLiquid.imgLiquidFill>img[http://fakeimg.pl/300x600] -->
   <div class="imagen small-12 columns h_50 imgLiquid imgLiquidFill mb2">
      <img src="http://fakeimg.pl/300x600" alt="">
   </div>
   <div class="texto small-12 large-10 large-offset-1 h_a p5 pb0">
      <div class="p5">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae at iure quo odit similique maxime dolorum?</p>
         <p>Libero vero nesciunt, maiores cum, culpa nulla aliquid expedita odio inventore sed dolorem!</p>
      </div>
   </div>

</section>

<!-- (h1>lorem9^+p>lorem10^+h2>lorem9^+(p>lorem18)*3)*4 -->

<section id="info-menu" class="medium-6 columns h_100">

   <?php foreach( $paginas as $pagina ) :  ?>

   <div class="small-6 columns h_30vh text-center">
      <a href="<?php echo get_the_permalink( $pagina -> ID ); ?>" class="h_100 w_100">
         <div class="vcenter">
            <div class="w_100 fontXL"><i class="fa fa-circle"></i></div>
            <h3 class="w_100"><?php echo get_the_title( $pagina->ID ); ?></h3>
            <p><?php echo get_the_excerpt( $pagina->ID ); ?></p>
         </div>
      </a>
   </div>

   <?php endforeach; ?>

</section>
