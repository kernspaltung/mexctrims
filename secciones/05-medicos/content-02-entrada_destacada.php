   <div class="small-12 text-left p3 mb1">
   <h4>Información para Médicos:</h4>
</div>
<aside class="medium-3 columns h_100 p0" data-sticky-container>


   <div class="sticky h_75vh fontM" data-sticky data-anchor="plantillas" data-margin-top="9">
     <?php  ?>
  </div>
</aside>



<section id="medicos-portada-entradas" class="medium-9 columns h_80 p0 ">

   <?php
   $medicos_destacada = get_term_by('name','Destacada Médicos', 'category' );
   $q = new WP_Query( array( 'cat' => $medicos_destacada->term_id, 'posts_per_page' => 1 ) );
   if ($q -> have_posts() ) :
      while ($q -> have_posts() ) :
         $q->the_post();
         $comments = get_comments( array( 'post_id' => get_the_ID() ) );

   ?>

   <article id="medicos-portada-entrada-destacada" class="entrada_medicos small-12 columns p5 pt0">
      <!-- (.small-5.columns.h_100>.h_100.imgLiquid.imgLiquidFill>img[src="http://fakeimg.pl/600x300"])+.small-7.columns.h_100{lorem10} -->



      <div  class="resumen_entrada small-12 columns h_100 p0">
         <!-- .small-12.columns.h_50*2 -->
         <!-- .small-12.columns.h_40+.small-12.columns.h_60   -->

         <header class="columns p0 h_40">

            <div class="small-12 columns h_30vh p0">
               <a href="<?php echo get_the_permalink(get_the_ID()); ?>">
                  <div class="h_100 imgLiquid imgLiquidFill">
                     <?php echo get_the_post_thumbnail( get_the_ID(), 'large' ); ?>
                  </div>
               </a>
            </div>

            <div class="columns text-left p4 pt0 pb0 m0">
               <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="p0 m0">
                  <h5 class=" black text-left m0 p pt2 pb2">
                     <?php echo apply_filters('the_title', get_the_title()); ?>
                  </h5>
               </a>
            </div>
      <!-- (.small-6.columns.h_100.text-center>.small-12.columns.fontM.subheader.vcenter{Subtitulo entrada})+.small-6.columns.h_100>(.small-8.columns.h_100>(.small-12.columns.h_60>.small-12.fontM.black.vcenter)+.small-12.columns.h_40>.small-12.fontXS.subheader.vcenter{YYYY/MM/DD})+.small-4.columns.h_100.p0>.h_100.imgLiquid.imgLiquidFill>img[src="http://fakeimg.pl/100x100"] -->

            <div class="medium-6 columns h_50 p0">

               <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="h_100">
                  <div class="vcenter text-left p4 pt0">
                     Publicado el <?php echo get_the_date( 'd \d\e F\, Y', get_the_ID() ); ?>
                  </div>
               </a>

            </div>

            <div class="ficha-medico medium-6 columns h_50 p0">

               <a href="<?php echo get_the_author_link(); ?>" class="h_100">

                  <div class="small-8 columns h_100 text-right">

                     <div class="fontM black vcenter">
                        <?php echo get_the_author(); ?>
                     </div>

                  </div>

                  <div class="small-4 columns h_100 p0">
                     <div class="h_100 imgLiquid imgLiquidNoFill">
                        <img src="http://fakeimg.pl/100x100" alt="">
                     </div>
                  </div>

               </a>

            </div>

         </header>


         <div class="contenido_y_comentarios columns h_60 pr0">

            <a href="<?php echo get_the_permalink(get_the_ID()); ?>">

               <!-- (.small-12.columns.h_60>.small-12.fontS.black.vcenter{lorem22})+.small-12.columns.h_40>(.small-8.columns.h_100)+.small-4.columns.h_100>.small-6.fontL.black.vcenter{Leer más}+.small-6.columns.fontXL.black.vcenter>i.fa.fa-angle-right -->
               <div class="extracto columns p4 text-left fontL h_60">
                  <?php echo apply_filters('the_excerpt', get_the_excerpt() ); ?>
               </div>

               <div id="medicos-portada-entrada-destacada-comentarios" class="columns h_40 p0">
                  <div class="small-10 columns h_100 p0">
                     <!-- (.small-12.columns.h_30>.small-12.bold.fontM.black.vcenter{Comentarios (12)})+.small-12.columns.h_70>.small-12.bold.fontM.black.vcenter{lorem13} -->
                     <div class="columns h_30">
                        <div class="bold fontM black vcenter">
                              <div class="small-6 columns p0 fontS h_100">
                                 <div class="p1 small-6 columns"><i class="fa fa-comments-o fontXL"></i></div>
                                 <div class="p2 small-6 columns">Comentarios</div>
                              </div>
                              <div class="small-6 columns pt0 text-right fontL h_100">
                                 <div class="p1">
                                    (<?php echo get_comments_number( get_the_ID() ); ?>)
                                 </div>
                              </div>
                           </div>

                     </div>
                     <div class="columns h_70 pl0">
                           <div class="small-2 columns p0 h_100">
                              <a href="<?php echo get_comment_author_url( $comments[0]->comment_ID ); ?>">
                              <div class="h_5vh imgLiquid imgLiquidNoFill">
                                    <?php $user_id = $comments[0]->user_id; echo get_avatar( $user_id, '100' ); ?>
                              </div>
                              </a>
                           </div>
                           <div class="small-3 columns p0 h_100">
                              <div class="fontXS black text-left pl1 vcenter">
                                 <a href="<?php echo get_comment_author_url( $comments[0]->comment_ID ); ?>">
                                    <?php echo get_comment_author( $comments[0]->comment_ID ); ?>
                                 </a>
                              </div>
                           </div>
                           <div class="small-7 columns subheader fontS text-left black vcenter">
                              <p>
                                 <?php echo wp_trim_words( get_comment_text( $comments[0]->comment_ID ), 20 ); ?>
                              </p>
                           </div>
                     </div>
                  </div><!-- .contenido_y_comentarios -->

                  <button class="small-2 columns button pointer h_100 p4">

                     <div class="small-12 fontXL black p0">
                        <i class="fa fa-angle-right text-right"></i>
                     </div>
                     <div class="small-12 fontS black vcenter">Leer más</div>

                  </button>

               </div>

            </a>
         </div> <!-- contenido_y_comentarios -->
      </div>  <!-- .resumen_entrada -->

   </article> <!-- #medicos-portada-entrada-destacada -->

   <?php
      endwhile;
   endif;
   ?>


</section>
