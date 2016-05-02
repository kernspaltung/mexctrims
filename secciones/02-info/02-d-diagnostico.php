<div class="h_100">


  <div class="large-5 columns h_100 p0">

    <div id="informacion-faq-titulo" class="large-12 columns h_20">
      <!-- titulo -->
      <div class="large-12 fontXXL text-center black p0 vcenter">Diagnostico</div>

    </div>

    <div id="informacion-diagnostico-lista-subtitulos" class="large-12 columns h_80">
      <!-- Subtitulos preguntas-->

      <div class="large-12 columns h_100 p0">
        <nav id="informacion-tratamientos-menu-mosaico" class="h_100 w_100">
          <ul class="large-12 columns h_100 p0 m0">
            <?php

            $html;

            for ($i=0; $i < 5 ; $i++) {
              $html .= '<a href="#" class="large-12 columns fontL h_20 bold subheader p3 m0">
                <li class="h_100 w_100 vcenter"><div class="large-12 vcenter">Subtitulo' . $i . '</div></li></a>';
              };

              echo $html;

              ?>
            </ul>
          </nav>
        </div>

      </div>

    </div>



    <!-- contenido diagnosticos  -->
    <div id="informacion-diagnostico-contenido" class="large-7 columns minH_100 p0">


      <div id="informacion-diagnostico-contenidofoto" class="large-12 columns h_30vh p0">

        <div class="h_100 imgLiquid imgLiquidFill">
          <img src="http://fakeimg.pl/600x400" alt="">
        </div>

      </div>
      <div id="informacion-diagnostico-contenido-texto-izquierdo" class="medium-12 large-6 columns h_60 p4">
        <h1 class="large-12 fontL text-cemter subheader bold p2">Titulo Diagnostico</h1>
        <div class="large-12 fontM text-left black p0 pt1">
          Lorem ipsum dolor sit amet, opio modi obcaecati libero dolore repellendus blanditiis ut inventore, quidem?
          Lorem ipsum dolor sit amet, opio modi obcaecati libero dolore repellendus blanditiis ut inventore, quidem?
          Lorem ipsum dolor sit amet, opio modi obcaecati libero dolore repellendus blanditiis ut inventore, quidem?
          Lorem ipsum dolor sit amet, opio modi obcaecati libero dolore repellendus blanditiis ut inventore, quidem?
        </div>
      </div>
      <div id="informacion-diagnostico-contenido-texto-derecho" class="medium-12 large-6 columns h_60 p4">

        <div class="large-12 fontM text-left black p0 pt1">
          Lorem ipsum dolor sit amet, opio modi obcaecati libero dolore repellendus blanditiis ut inventore, quidem?
          Lorem ipsum dolor sit amet, opio modi obcaecati libero dolore repellendus blanditiis ut inventore, quidem?
          Lorem ipsum dolor sit amet, opio modi obcaecati libero dolore repellendus blanditiis ut inventore, quidem?
        </div>

        <div class="large-6 columns p1">
          <a href="#" class="large-12 fontL bold black p3 rel bottom right z1 mb1 mr1">
            <div class="large-12 h_100 fontM text-center bold ">+ Información</div>
          </a>
        </div>

      </div>



    </div>


  </div>
