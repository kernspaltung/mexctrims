<?php

$registro = get_page_by_title( 'Registro Inicio' );
$agradecimiento = get_page_by_title( 'Agradecimiento' );

?>

<section id="inicio-registro" class="small-12 columns text-center rel mt4 mb5">

   <div id="inicio-registro-formulario" class="small-12 medium-8 small-centered h_100vh h_a p4 p_sm_1 primario_acento_bg">

      <div class="columns fontS text-center h_40 h_sm_50">
         <?php echo apply_filters( 'the_content', $registro -> post_content ); ?>
      </div>
      <div class="columns h_sm_60vh">
         <form action="#" class="w_100">
            <div class="row">
               <label for="">Nombre</label><input type="text">
            </div>
            <div class="row">
               <label for="">E-mail</label><input type="text">
            </div>

            <div class="row mt1">
               <div class="small-4 columns button secundario1_bg text-center p4">
                  <i class="fa fa-user fontXL row"></i>
                  <div class="fontS text-center">Particular</div>
                  <input class="hidden" type="radio">
               </div>
               <div class="small-4 columns button secundario2_bg text-center p4">
                  <i class="fa fa-user fontXL row"></i>
                  <div class="fontS text-center">Paciente</div>
                  <input class="hidden" type="radio">
               </div>
               <div class="small-4 columns button secundario3_bg text-center p4">
                  <i class="fa fa-user-md fontXL row"></i>
                  <div class="fontS text-center">Médico</div>
                  <input class="hidden" type="radio">
               </div>
            </div>

            <div class="row align-right">
               <div class="columns text-right">
                  <a class="button primary white_bg">Enviar</a>
               </div>
            </div>
         </form>
      </div>
   </div>

   <div id="inicio-registro-agradecimiento" class="small-10 medium-8 small-centered h_60vh hidden">

      <div class="vcenter">
         <h1>
            <?php echo apply_filters( 'the_content', $agradecimiento -> post_content ); ?>
         </h1>
      </div>

   </div>

</section>
