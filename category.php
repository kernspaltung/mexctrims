<?php
get_header();

?>

<section id="categoria" class="row p5">


   <h1><?php echo single_cat_title(); ?></h1>


<?php
   // $q = new WP_Query( array( 'cat' => $medicos->term_id, 'category__not_in'=>array($medicos_destacada->term_id), 'posts_per_page' => 12 ) );
   if ( have_posts() ) :
      while ( have_posts() ) :

         the_post();

         $comments = get_comments( array( 'post_id' => get_the_ID() ) );

         ?>



         <article class="small-6 column h_100 p6">
            <a href="<?php echo get_the_permalink( get_the_ID() ); ?>">

               <header class="small-12 columns h_40 p0">


                  <div class="titulo columns h_100 mb1 p0">
                     <div class="fontM bold black vcenter text-left">
                        <h5>
                           <?php echo get_the_title(); ?>
                        </h5>
                     </div>
                  </div>

                  <div class="nombre-autor columns h_60  p0 pb1">
                     <div class="text-left fontM">
                        <a href="<?php echo get_the_author_link(); ?>">
                           <?php echo get_the_author(); ?>
                        </a>
                     </div>
                  </div>

                  <div class="imagen columns h_25vh imgLiquid imgLiquidFill">
                     <?php echo get_the_post_thumbnail(); ?>
                  </div>



               </header>
               <div class="columns text-right p3 fontS">
                  Publicado el <?php echo get_the_date('d \d\e F\, Y', get_the_ID()); ?>
               </div>

               <div class="extracto small-12 columns pt1 p3 fontM text-left">
                  <?php echo apply_filters('the_excerpt', get_the_excerpt()); ?>
               </div>

               <footer class="small-12 columns">
                  <div class="categorias_noticia small-8 columns h_100 p2 text-left">
                     <h5>Categorías:</h6>
                     <div class="categorias-entrada small-12 columns fontM p0">
                        <?php
                        foreach( get_the_category() as $categoria ):
                           $categorias_excluidas  = array( 1, $medicos_destacada -> term_id, $medicos->term_id, $noticia_principal->term_id, $noticias->term_id, );
                           if( ! in_array( $categoria->term_id, $categorias_excluidas ) ) :
                        ?>

                              <li class="small-4 columns end fontXS">
                                 <a href="<?php echo get_category_link( $categoria->term_id ); ?>">
                                    <?php echo $categoria->name; ?>
                                 </a>
                              </li>

                        <?php
                           endif;
                        endforeach; ?>
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
                           (<?php echo get_comments_number(); ?>)
                        </div>
                     </div>
                  </div>

               </footer>
            </a>
         </article>



         <?php
      endwhile;
   endif;
   echo $html;


?>

</section>

<?php
get_footer();
   ?>
