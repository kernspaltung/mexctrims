<?php

$registro = get_page_by_title( 'Registro Inicio' );
$agradecimiento = get_page_by_title( 'Agradecimiento' );

?>

<section id="inicio-registro" class="small-12 columns text-center rel mt2 mb5">

   <div class="small-10 medium-8 small-centered h_60vh">

      <div class="columns fontXS text-center">
         <?php echo apply_filters( 'the_content', $registro -> post_content ); ?>
      </div>
      <div class="columns">
         <form action="#" class="w_100">
            <div class="row">
               <label for="">Nombre</label><input type="text">
            </div>
            <div class="row">
               <label for="">E-mail</label><input type="text">
            </div>

            <div class="row mt1">
               <div class="small-4 columns button btn-secondary text-center p4">
                  <i class="fa fa-user fontXL row"></i>
                  <div class="fontS text-center">Particular</div>
                  <input class="hidden" type="radio">
               </div>
               <div class="small-4 columns button btn-secondary text-center p4">
                  <i class="fa fa-user fontXL row"></i>
                  <div class="fontS text-center">Paciente</div>
                  <input class="hidden" type="radio">
               </div>
               <div class="small-4 columns button btn-secondary text-center p4">
                  <i class="fa fa-user-md fontXL row"></i>
                  <div class="fontS text-center">Médico</div>
                  <input class="hidden" type="radio">
               </div>
            </div>

            <div class="row align-right">
               <div class="columns text-right">
                  <a class="button primary">Enviar</a>
               </div>
            </div>
         </form>
      </div>
   </div>

   <div class="small-10 medium-8 small-centered h_60vh">

      <div class="vcenter">
         <h1>
            <?php echo apply_filters( 'the_content', $agradecimiento -> post_content ); ?>
         </h1>
      </div>

   </div>

</section>
