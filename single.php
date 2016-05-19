<?php

get_header();
$comentarios = get_comments( array( 'post_id' => get_the_ID() ) );

if (have_posts()) :
while (have_posts()) :
   the_post();
?>


<section id="single" class="columns h_100 p0">


<?php get_template_part( 'secciones/00-elementos/content','02-taxonomias' ); ?>



  <!-- contenido -->
  <article id="single-contenedor-contenido" class="small-12 large-8 columns scrollH">

   <?php get_template_part( 'secciones/00-elementos/content','03-taxonomias_acordeon' ); ?>


    <section id="single-contenido-entrada" class="small-12 columns p6 text-left">

      <h3 class="mb2"><?php echo get_the_title(); ?></h3>

      <?php echo apply_filters( 'the_content', get_the_content()); ?>

    </section>

  </article>
  <!-- contenido -->





</section>

<section id="discusion" class="small-12 large-8 columns ">
   <?php
      $categoria_medicos = get_term_by('name','Médicos','category')->term_id;

      if( in_category( $categoria_medicos ) && is_user_logged_in() ) {
         comment_form();
      }

      foreach ($comentarios as $comentario ) {
         ?>
         <div class="columns h_70 pl0">
               <div class="small-2 columns p0 h_100">
                  <a href="<?php echo get_comment_author_url( $comentario->comment_ID ); ?>">
                  <div class="h_10vh imgLiquid imgLiquidNoFill">
                        <?php $user_id = $comentario->user_id; echo get_avatar( $user_id, '100' ); ?>
                  </div>
                  </a>
               </div>
               <div class="small-3 columns p0 h_100">
                  <div class="fontXS black text-left pl1 vcenter">
                     <a href="<?php echo get_comment_author_url( $comentario->comment_ID ); ?>">
                        <?php echo get_comment_author( $comentario->comment_ID ); ?>
                     </a>
                  </div>
               </div>
               <div class="small-7 columns subheader fontM text-left black vcenter">
                  <p>
                     <?php echo get_comment_text( $comentario->comment_ID ); ?>
                  </p>
               </div>
         </div>
      <?php } ?>
</section>

<?php

endwhile;
endif;

get_footer();

?>
