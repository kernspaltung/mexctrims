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

      <!-- ... -->
   </ul>



</div>


<div class="h_100 row text-center rel mt2">

   <div class="small-12 columns row h_60vh text-left fontM p5 p_sm_1">
      <div class="small-12 medium-7 columns p5 p_sm_1 h_100">
         <div class="vcenter">

            <h5 class="pb1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consequuntur reiciendis illum?</p>
               <p>Officia architecto rerum ipsam consequatur obcaecati illum impedit rem voluptatum deleniti, eos?</p>

            <h5 class="pb1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
               <p>Aperiam incidunt eligendi consequuntur doloremque, voluptatibus voluptate vero veniam dignissimos impedit corporis.</p>

         </div>
      </div>
      <div class="hide-for-small-only medium-5 columns h_100">
         <div class="h_100 row imgLiquid imgLiquidFill">
            <img src="http://fakeimg.pl/450x300" alt="">
         </div>
      </div>
   </div>

   <div class="small-12 columns p0 m0 h_20vh">
      <div class="medium-4 columns callout panel h_100 text-center m0 p0 mt_sm_2">
         <div class="vcenter">
            <i class="fa fa-circle-o fontXL"></i>
            <div class="text-center">
               <h5>Lorem ipsum dolor sit.</h5>
               <div class="p fontS">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis repellat quaerat hic qui aliquam accusamus explicabo est ratione!</div>
            </div>
         </div>
      </div>
      <div class="medium-4 columns callout panel h_100 text-center m0 p0 mt_sm_2">
         <div class="vcenter">
            <i class="fa fa-circle-o fontXL"></i>
            <div class="text-center">
               <h5>Lorem ipsum dolor sit.</h5>
               <div class="p fontS">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure quae voluptatem ullam esse eligendi nisi dolorum a veniam.</div>
            </div>
         </div>
      </div>
      <div class="medium-4 columns callout panel h_100 text-center m0 p0 mt_sm_2">
         <div class="vcenter">
            <i class="fa fa-circle-o fontXL"></i>
            <div class="text-center">
               <h5>Lorem ipsum dolor sit.</h5>
               <div class="p fontS">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium nulla, et earum quibusdam quaerat sed, possimus repellat aliquid.</div>
            </div>
         </div>
      </div>
   </div>
</div>


<?php include_once 'footer.php'; ?>
