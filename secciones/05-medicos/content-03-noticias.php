
   <?php

   $medicos_destacada = get_term_by('name','Destacada Médicos', 'category' );
   $medicos = get_term_by('name','Médicos', 'category' );
   $noticia_principal = get_term_by('name','Noticia Principal', 'category' );
   $noticias = get_term_by('name','Noticias', 'category' );
   $categorias_excluidas  = array( 1, $medicos_destacada -> term_id, $medicos->term_id, $noticia_principal->term_id, $noticias->term_id, );

   $q = new WP_Query( array( 'cat' => $medicos->term_id, 'category__not_in'=>array($medicos_destacada->term_id), 'posts_per_page' => 12 ) );
   if ($q -> have_posts() ) :
      while ($q -> have_posts() ) :
         $q->the_post();
         $comments = get_comments( array( 'post_id' => get_the_ID() ) );

         ?>




            <article id="medicos-portada-entrada-<?php echo get_the_ID(); ?>" class="entrada_medicos columns h_65vh medium-6 large-4  p3">
               <!-- (.small-5.columns.h_100>.h_100.imgLiquid.imgLiquidFill>img[src="http://fakeimg.pl/600x300"])+.small-7.columns.h_100{lorem10} -->


                  <div class="columns h_100 p3 tarjeta white_bg rel">
                     <!-- .small-12.columns.h_50*2 -->
                     <!-- .small-12.columns.h_40+.small-12.columns.h_60   -->

                     <header class="columns p0 ha">

                        <div class="columns small-8 text-left p2 pt1 pb0 m0">
                           <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="p0 m0">
                              <h6 class="black text-left m0 p0">
                                 <?php echo apply_filters('the_title', get_the_title()); ?>
                              </h6>
                           </a>
                        </div>

                        <div class="ficha-medico columns small-4 pt0 pb0">

                           <a href="<?php echo get_the_author_link(); ?>" class="   ">

                              <div class="columns text-center fontS text-right pr0">
                                 <?php echo get_the_author(); ?>
                              </div>

                              <div class="columns h_10vh imgLiquid imgLiquidNoFill">
                                 <?php echo get_avatar( get_the_author_ID() ); ?>
                              </div>

                           </a>

                        </div>
                     </header>

                  <!-- (.small-6.columns.h_100.text-center>.small-12.columns.fontM.subheader.vcenter{Subtitulo entrada})+.small-6.columns.h_100>(.small-8.columns.h_100>(.small-12.columns.h_60>.small-12.fontM.black.vcenter)+.small-12.columns.h_40>.small-12.fontXS.subheader.vcenter{YYYY/MM/DD})+.small-4.columns.h_100.p0>.h_100.imgLiquid.imgLiquidFill>img[src="http://fakeimg.pl/100x100"] -->

                  <div class="columns p2 fontXS text-left">
                     <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="">
                        Publicado el <?php echo get_the_date( 'd \d\e F\, Y', get_the_ID() ); ?>
                     </a>
                  </div>
                     <div class="columns medium-4 large-6 h_25 p2">
                        <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="w_100 h_100">
                           <div class="h_100 imgLiquid imgLiquidFill">
                              <?php echo get_the_post_thumbnail( get_the_ID(), 'large' ); ?>
                           </div>
                        </a>
                     </div>

                     <div class="medium-8 large-6 columns p0">



                        <div class="contenido_y_comentarios columns p0">

                           <a href="<?php echo get_the_permalink(get_the_ID()); ?>">

                              <!-- (.small-12.columns.h_60>.small-12.fontS.black.vcenter{lorem22})+.small-12.columns.h_40>(.small-8.columns.h_100)+.small-4.columns.h_100>.small-6.fontL.black.vcenter{Leer más}+.small-6.columns.fontXL.black.vcenter>i.fa.fa-angle-right -->
                              <div class="extracto columns p2 text-left fontS">
                                 <?php echo apply_filters('the_excerpt', wp_trim_words( get_the_excerpt(), 13 )); ?>
                              </div>


                           </div>

                        </div> <!-- contenido_y_comentarios -->


                        <div class="categorias_noticia columns h_a p2 pt0 text-left">
                           <h6 class="fontM">Categorías:</h6>
                           <div class="categorias-entrada small-12 columns fontM p0">
                              <?php
                              foreach( get_the_category() as $categoria ):

                                 if( ! in_array( $categoria->term_id, $categorias_excluidas ) ) :
                                    ?>

                                    <div class=" columns w_a f_l p1 fontXS">
                                       <a href="<?php echo get_category_link( $categoria->term_id ); ?>" class="tarjeta h_100 primario_bd p2">
                                          <?php echo $categoria->name; ?>
                                       </a>
                                    </div>

                                    <?php
                                 endif;
                              endforeach; ?>
                           </div>
                        </div>



                        <div class="comentarios-boton columns p0 mb2 ">
                        <div id="medicos-portada-entrada-destacada-comentarios" class="columns h_50 p0">
                           <div class="small-10 columns h_100 p0">
                              <!-- (.small-12.columns.h_30>.small-12.bold.fontM.black.vcenter{Comentarios (12)})+.small-12.columns.h_70>.small-12.bold.fontM.black.vcenter{lorem13} -->
                              <div class="columns w_a h_30 primario_acento_bg">
                                 <div class="h_5vh fontM black">
                                    <div class="columns w_a vcenter"><i class="fa fa-comments-o fontXL"></i></div>
                                       <div class="columns w_a vcenter p0 fontS ">
                                          <div class="p2 columns w_a">Comentarios</div>
                                       </div>
                                       <div class="columns w_a f_l vcenter h_a text-right fontM">
                                             (<?php echo get_comments_number( get_the_ID() ); ?>)

                                       </div>
                                    </div>

                              </div>
                              <div class="columns h_70 pl0 primario_acento_blanco_bg">
                                    <div class="small-2 columns p0 h_a vcenter">
                                       <a href="<?php echo get_comment_author_url( $comments[0]->comment_ID ); ?>">
                                       <div class="h_5vh imgLiquid imgLiquidNoFill">
                                             <?php $user_id = $comments[0]->user_id; echo get_avatar( $user_id, '100' ); ?>
                                       </div>
                                       </a>
                                    </div>
                                    <div class="columns w_a p0 h_a vcenter">
                                       <div class="fontXS black text-left">
                                          <a href="<?php echo get_comment_author_url( $comments[0]->comment_ID ); ?>">
                                             <?php echo get_comment_author( $comments[0]->comment_ID ); ?>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="small-6 columns h_100 p0 subheader fontS text-left black vcenter">
                                       <i class=" h_a p0 neutral_oscuro fontXXS">
                                          <?php echo wp_trim_words( get_comment_text( $comments[0]->comment_ID ), 9 ); ?>
                                       </i>
                                    </div>
                              </div>

                              <button class="small-2 columns button h_a pointer absDownR m0 primario_acento_bd white_bg p2">

                                    <i class="columns fa fa-angle-right text-center"></i>
                                 <div class="small-12 fontXS black vcenter">Leer más</div>

                              </button>

                           </div><!-- .comentarios_boton -->

                        </div>
                  </a>
               </div>
            </article> <!-- #medicos-portada-entrada-destacada -->



         <?php
      endwhile;
   endif;
   echo $html;
   ?>


</section>
