<section id="noticias" class="row mt4 mb4 p5">

   <h4 class="small-12 text-left p0">
      Noticias
   </h4>

   <div id="inicio-noticias-small" class="p5 row text-center rel show-for-small-only">

      <ul class="accordion w_100" data-accordion>

         <?php for ($i=0; $i < 4; $i++) { ?>

         <li class="accordion-item p0 <?php echo $i==0 ? 'is-active' : ''; ?>" data-accordion-item>
            <a href="#" class="accordion-title p0">
               <h3 class="p2 m0 fontL font_sm_M text-left">Título de Aviso Destacado Con Más de Ocho Palabras.</h3>
            </a>
            <div class="accordion-content" data-tab-content>
               <a href="http://google.com">
                  <div class="extracto small-12 columns p4 text-left fontS">
                     <div class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero tempore, vero nemo officia adipisci accusamus quo...</div>
                  </div>
                  <div class="small-12 columns imagen h_20vh imgLiquid imgLiquidNoFill">
                     <img src="http://fakeimg.pl/<?php echo rand(100,800); ?>x300" alt="">
                  </div>
                  <div class="w_100 text-right">
                     <div class="fa fa-plus"></div>
                     <div class="fontS">Ver Más</div>
                  </div>
               </a>
            </div>
         </li>

         <?php } ?>

      </ul>


   </div>

   <div id="inicio-noticias-medium" class="p5 row text-center rel hide-for-small-only">

   </div>

</section>
