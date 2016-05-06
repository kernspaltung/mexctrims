<div class="p5 row text-center rel mt2">

   <ul class="accordion w_100" data-accordion>

      <?php for ($i=0; $i < 4; $i++) { ?>

      <li class="accordion-item p0 <?php echo $i==0 ? 'is-active' : ''; ?>" data-accordion-item>
         <a href="#" class="accordion-title p0"><h3 class="p2 m0 fontL font_sm_M text-left">Título de Aviso Destacado Con Más de Ocho Palabras.</h3></a>
         <div class="accordion-content" data-tab-content>
            <div class="small-6 columns  excerpt p4 text-left fontS">
               <div class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero tempore, vero nemo officia adipisci accusamus quo...</div>
            </div>
            <div class="small-6 columns imagen h_20vh imgLiquid imgLiquidNoFill">
               <img src="http://fakeimg.pl/<?php echo rand(100,800); ?>x300" alt="">
            </div>
            <div class="w_100 text-right">
               <div class="fa fa-plus"></div>
               <div class="fontS">Ver Más</div>
            </div>
         </div>
      </li>

      <?php } ?>

   </ul>



</div>
