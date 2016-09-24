   <div class="minH_100">


   <div class="large-12 columns minH_100 p0">





      <div id="descargables-lista-mosaico" class="large-12 columns h_80vh">
         <!-- Nav / mosaicos -->


         <aside class="large-3 columns h_100 p0" data-sticky-container>
            <div class="sticky h_75vh fontM" data-sticky data-anchor="descargables-mosaico">

               <nav id="descargables-menu-mosaico" class="columns h_70vh m0">
                  <div class="vcenter">
                     <ul class="m0 p0">
                        <?php

                        ob_start();
                        for ($i=1; $i < 5 ; $i++) {
                           ?>
                              <li class="p1 pl1 pr1 secundario3_bg mb1 tarjeta white bold">
                                 <a href="#" class="w_100 h_100">
                                    Categoría de descargables
                                 </a>
                              </li>
                        <?php
                        };

                        $html = ob_get_contents();

                        ob_end_clean();

                        echo $html;

                        ?>
                     </ul>
                  </div>
               </nav>

            </div>
         </aside>




         <div id="descargables-mosaico" class="sticky-here large-9 columns h_a p5 pt1 ">

            <?php

            $mosaico;

            ob_start();

            for ($i=1; $i < 30 ; $i++) {

               ?>
               <div class="medium-6 columns h_30vh p4 text-left">

                  <a href="#" class="tarjeta white_bg h_100 p4 rel">
                     <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h6>
                     <div class="fontXS">Publicado</div>
                     <div class="texto columns small-9 mt1 p0 fontS">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo facere, natus. Laborum?</p>
                     </div>
                     <div class="columns small-3 p2 absDownR primario_acento_bd">
                           <div class="columns text-center secundario2">
                              <i class="fa fa-arrow-down"></i>
                           </div>
                           <div class="columns p0 fontXS text-center secundario2">
                              Descargar
                           </div>

                     </div>
                  </a>

               </div>

               <?php
            };
            $html = ob_get_contents();
            ob_end_clean();
            $mosaico = $html;

            echo $mosaico;

            ?>


         </div>


      </div>



   </div>



</div>
<!--
.large-5.columns.h_100+.large-7.columns.h_100



<div class="h_100 imgLiquid imgLiquidFill">
<img src="http://fakeimg.pl/400x600" alt="">
</div>


(.large-12.columns.h_20>.large-12.fontXXL.subtitle.bold.black.text-left{subtitulo})+.large-12.columns.minH_60>.large-12.fontL.black.text-left{lorem32}

-->
