<div class="minH_100vh">


  <div class="large-5 columns minH_100 p0">

    <div id="informacion-faq-titulo" class="large-12 columns h_15vh">
      <!-- titulo -->
      <div class="large-12 fontXXL text-center black p0 vcenter">Preguntas Frecuentes</div>

    </div>

    <div id="informacion-faq-lista-preguntas" class="large-12 columns minH_50vh">
      <!-- Nav preguntas-->

      <div class="large-12 columns h_100 p0">
        <nav id="informacion-tratamientos-menu-mosaico" class="w_100">
          <ul class="large-12 columns minH_50vh p0">
            <?php

            $html;

            for ($i=0; $i < 25 ; $i++) {
              $html .= '<a href="#" class="small-12 columns fontL bold black p3">
                <li class="h_100 w_100">¿Qué es Mexctrims?' . $i . '</li></a>';
              };

              echo $html;

              ?>
            </ul>
          </nav>
        </div>

      </div>

    </div>



    <!--
    En la siguiente parte no tengo claro como se va a desplegar la informacion
    iterare el mismo numero de respuestas que preguntas, se me ocurre que este contenedor(derecho)
    puede ser llenado por ajax dependiendo el menu(izquierdo) de preguntas
  -->
  <div id="informacion-faq-respuestas" class="large-7 columns minH_100">



    <!-- respuesta Faq y thumb -->

    <?php

    $faq_respuesta;

    for ($i=0; $i < 25 ; $i++) {
      $faq_respuesta .= '<div id="informacion-faq-respuestas" class="large-12 columns h_30vh">
        <div class="informacion-imagen-faq large-5 columns h_100 p3">
          <div class="h_100 imgLiquid imgLiquidFill">
            <img src="http://fakeimg.pl/400x600" alt="">
          </div>
        </div>
        <div class="informacion-texto-1 large-7 columns h_100 p3">
          <div class="large-12 fontM text-left black p0 vcenter">
            Lorem ipsum dolor sit amet, opio modi obcaecati libero dolore repellendus blanditiis ut inventore, quidem?
            Lorem ipsum dolor sit amet, opio modi obcaecati libero dolore repellendus blanditiis ut inventore, quidem?
          </div>
          <div class="small-4 columns p3 rel bottom right z1 mb1 mr1">
            <div class="small-12 fontM text-center bold ">+ Información</div>
          </div>
        </div>
      </div>';

    };

    echo $faq_respuesta;

    ?>

  </div>


</div>
