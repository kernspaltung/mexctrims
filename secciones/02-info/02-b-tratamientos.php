<div class="minH_100">


  <div class="large-12 columns h_100 p0">

    <!-- titulo -->

    <div id="informacion-tratamientos-titulo" class="large-12 columns h_15vh">
      <!-- titulo -->
      <div class="large-12 fontXXL text-center black p0 vcenter">Tratamientos</div>
    </div>


    <div id="informacion-tratamientos-texto-1" class="large-12 columns h_30vh">
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


    <div id="informacion-tratamientos-lista-mosaico" class="large-12 columns minH_50vh">
      <!-- Nav / mosaicos -->


      <div class="large-3 columns h_100 p0">
        <nav id="informacion-tratamientos-menu-mosaico" class="w_100">
          <ul class="large-12 columns minH_50vh">
            <?php

            $html;

            for ($i=0; $i < 5 ; $i++) {
              $html .= '<a href="#" class="small-12 fontL bold black p3">
                <li class="h_100 w_100">tratamiento ' . $i . '</li></a>';
              };

              echo $html;

              ?>
            </ul>
          </nav>

        </div>

        <div id="informacion-tratamientos-mosaico" class="large-9 columns h_100 p0">

          <?php

          $mosaico;

          for ($i=0; $i < 30 ; $i++) {
            $mosaico .= '<div class="large-4 columns h_20vh p3">
              <div class="h_100 imgLiquid imgLiquidFill">
                <img src="http://fakeimg.pl/100x100" alt="">
              </div>
            </div>';
          };

          echo $mosaico;

          ?>


        </div>


      </div>



    </div>



  </div>
  <!--  -->
