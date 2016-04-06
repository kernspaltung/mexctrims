<?php include_once 'header.php'; ?>

<div id="background" class="h_100 w_100 absUpL z-1">
   <div class="w_100 h_100 imgLiquid imgLiquidFill  abs image-fx z-1"><img src="http://fakeimg.pl/600x300" alt=""></div>
   <div class="curtain w_100 h_100 z-1 p0 abs"></div>
   <div class="img-overlay w_100 h_100 z-1 p0 abs"></div>
</div>

<div class="h_100 text-center rel z1k">
   <div class="row p4 h_75">
      <div class="small-6 large-8 columns">
         <div class="h_100 imgLiquid imgLiquidFill image-fx">
            <img src="http://fakeimg.pl/600x300" alt="">
         </div>
      </div>
      <div class="small-6 large-4 columns fontM h_30vh h_sm_75">
         <div class="vcenter">
            Comité Mexicano para el Tratamiento e Investigación en Esclerosis Múltiple
         </div>
      </div>
      <div class="row pt4 pt_sm_1">
         <h4 class="fontM p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quo delectus odio velit dolores vel eaque minima aliquam.</h4>
      </div>
   </div>
   <div id="boton_scroll" class="w_100 h_25 fontXXL text-center mt2 mt_sm_0">
      <a href="#" class="w_100 h_100">
         <div class="vcenter">
            <i class="fa fa-angle-down"></i>
         </div>
      </a>
   </div>
</div>

<div class="h_100 row text-center rel mt2">





   <ul class="accordion w_100" data-accordion>

      <?php for ($i=0; $i < 4; $i++) { ?>

      <li class="accordion-item p0 <?php echo $i==0 ? 'is-active' : ''; ?>" data-accordion-item>
         <a href="#" class="accordion-title"><h3 class="p2 m0 fontM text-left">Título de Aviso Destacado Con Más de Ocho Palabras.</h3></a>
         <div class="accordion-content" data-tab-content>
            <div class="row imagen h_20vh imgLiquid imgLiquidNoFill">
               <img src="http://fakeimg.pl/<?php echo rand(100,800); ?>x300" alt="">
            </div>
            <div class="w_100 excerpt p4 text-left fontS">
               <div class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero tempore, vero nemo officia adipisci accusamus quo...</div>
            </div>
            <div class="w_100 text-right">
               <div class="fa fa-plus"></div>
               <div class="fontS">Ver Más</div>
            </div>
         </div>
      </li>

      <?php } ?>

      <!-- ... -->
   </ul>



</div>

<?php include_once 'footer.php'; ?>
