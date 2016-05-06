   <section id="medicos-noticias" class="small-12 columns h_100">
      <div class="small-12 text-left">
         <h4>Contenidos por y para Médicos:</h4>
      </div>
     <!-- .row.small-4.h_20vh>(.small-12.columns.h_30>.small-12.fontM.bold.black.vcenter{Titulo Entrada})+.small-12.columns.h_70>((.small-9.columns.h_100>(.small-12.columns.h_50>.small-12.fontS.bold.vcenter{Autor})+.small-12.columns.h_50>.small-12.fontS.bold.vcenter{YYYY/MM/DD})+.small-3.columns.h_100>.button.hollow.h_100.w_100>i.fa.fa-angle-right) -->
     <?php
     $html = "";
     for ($i=0; $i < 9; $i++) {
       $html .= '

       <article class="small-6 column h_100 p6">
         <a href="#">

         <header class="small-12 columns h_40 p0">


           <div class="titulo columns h_100 mb1 p0">
             <div class="fontM bold black vcenter text-left">
               <h5>
                 Titulo de la Entrada
               </h5>
             </div>
           </div>

           <div class="nombre-autor columns h_60  p0 pb1">
               <div class="text-left fontM">Nombre del Autor</div>
           </div>

           <div class="imagen columns h_25vh imgLiquid imgLiquidFill">
             <img src="http://fakeimg.pl/400x200" alt="">
           </div>



         </header>
         <div class="columns text-right p3 fontS">
           Publicado 1 de enero, 2016
         </div>

         <div class="extracto small-12 columns pt1 p3 fontM text-left">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde accusamus blanditiis sequi, quaerat dolorum veritatis!
         </div>

         <footer class="small-12 columns">
           <div class="small-8 columns h_100 p2 text-left">
             <h6>Categorías:</h6>
             <div class="categorias-entrada small-12 columns fontS p0">
               Categoría 1,
               Categoría 2,
               Categoría 3
             </div>
           </div>
           <button class="small-4 button pointer h_100 p2">

             <div class="small-12 fontXL black p0">
               <i class="fa fa-angle-right text-right"></i>
             </div>
             <div class="small-12 fontS black vcenter">Leer más</div>

           </button>


            <div class="small-12 pt1 h_5vh">
               <div class="small-6 columns p0 fontS h_100">
                  <div class="p1 small-6 columns"><i class="fa fa-comments-o fontXL"></i></div>
                  <div class="p2 small-6 columns">Comentarios</div>
               </div>
               <div class="small-6 columns pt0 text-right fontL h_100">
                  <div class="p1">
                     (99)
                  </div>
               </div>
            </div>

         </footer>
         </a>
       </article>';
     }
     echo $html;
     ?>

   </section>


</section>
