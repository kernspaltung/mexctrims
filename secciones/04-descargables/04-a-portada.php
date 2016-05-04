<div class="minH_100">


  <div class="large-12 columns minH_100 p0">


    <div id="descargables-titulo" class="large-12 columns h_15vh">
      <!-- titulo -->
      <div class="large-12 fontXXL text-center black p0 vcenter">Descargables</div>
    </div>


    <div id="descargables-texto-1" class="large-12 columns h_30vh">
      <!-- informacion y thumb -->
      <div class="informacion-imagen large-5 columns h_100 p3">
        <div class="h_100 imgLiquid imgLiquidFill">
          <img src="http://fakeimg.pl/400x600" alt="">
        </div>
      </div>
      <div class="informacion-texto-1 large-7 columns h_100 p3">
        <div class="large-12 fontL text-left black p0 vcenter">
          Lorem ipsum dolor sit amet, opio modi obcaecati libero dolore repellendus blanditiis ut inventore, quidem?
          Lorem ipsum dolor sit amet, opio modi obcaecati libero dolore repellendus blanditiis ut inventore, quidem?
          Lorem ipsum dolor sit amet, opio modi obcaecati libero dolore repellendus blanditiis ut inventore, quidem?
        </div>
      </div>
    </div>


    <div id="descargables-lista-mosaico" class="large-12 columns minH_50vh">
      <!-- Nav / mosaicos -->


      <div class="large-3 columns h_100 p0">
        <nav id="descargables-menu-mosaico" class="w_100 h_100 pt1">
          <ul class="large-12 columns minH_50vh">
            <?php

            $html;

            for ($i=1; $i < 5 ; $i++) {
              $html .= '<a href="#" class="small-12 fontL bold black p3">
                <li class="small-12">Categoría de descargables ' . $i . '</li></a>';
              };

              echo $html;

              ?>
            </ul>
          </nav>
        </div>




        <div id="descargables-mosaico" class="large-9 columns h_100 p5 pt1">

          <?php

          $mosaico;

          for ($i=1; $i < 30 ; $i++) {
            $mosaico .= '<div class="large-4 columns h_30vh p4">
              <div class="large-12 fontM black text-left vcenter">

                <a href="#">
                  <h5 class="mb1">   Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo facere, natus. Laborum?</p>
                </a>

              </div>
            </div>';
          };

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
