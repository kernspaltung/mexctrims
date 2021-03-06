   <div class="minH_100 h_sm_0">


   <div class="large-12 columns minH_100 h_sm_0 p0">





      <div id="articulos-lista-mosaico" class="large-12 columns h_80vh h_sm_0">
         <!-- Nav / mosaicos -->


         <aside class="small-12 medium-3 columns h_100  p0" data-sticky-container data-sticky-on="medium">
            <div class="sticky h_75vh h_sm_40vh fontM" data-sticky data-anchor="articulos-mosaico">

               <nav id="articulos-menu-mosaico" class="columns h_70vh h_sm_40vh m0">
                  <div class="columns vcenter">
                     <ul class="m0 p0">
                        <?php
                        $categoria_articulos = get_term_by("name","Artículos","category");
                        $categorias = get_term_children( $categoria_articulos -> term_id, "category" );

                        ob_start();
                        foreach ($categorias as $categoria ) {

                           ?>
                              <li class="columns p1 pl1 pr1 secundario3_bd mb1 tarjeta">
                                 <a href="<?php echo get_category_link( $categoria ); ?>" class="w_100 h_100 fontS font2">
                                    <?php echo get_term($categoria) -> name;  ?>
                                 </a>
                              </li>
                        <?php
                        };

                        $html = ob_get_contents();

                        ob_end_clean();

                        echo $html;

                        ?>
                     </ul>
                  </div>
               </nav>

            </div>
         </aside>




         <div id="articulos-mosaico" class="sticky-here medium-9 columns h_a h_sm_0 p5 pt1 mb2 pb4">

            <?php

            $mosaico;

            ob_start();

            $args = array( 'post_type' => 'articulo', 'posts_per_page' => -1 );

            $q = new WP_Query( $args );

            if( $q -> have_posts() ) :
               while ( $q -> have_posts() ) :
                  $q -> the_post();
                  $archivo = get_post_meta(get_the_ID(),'articulo_archivo',true);
                  if( is_array( $archivo ) ){

                     $link = $archivo['url'];
                     $type = $archivo['type'];

                  }

                  $icon = 'fa-arrow-down';

                  switch( $type ) {
                     case 'application/pdf':
                        $icon = 'fa-file-pdf-o';
                        break;
                  }
                  ?>

                  <article class="medium-6 columns h_5x p2 text-left rel">

                     <div class="tarjeta h_100 p4 rel white_bg">
                     <!-- <a href="<?php echo $link; ?>" class="" target="_blank"> -->
                        <h6><?php echo get_the_title(); ?></h6>

                        <div class="fontXS">
                           Publicado el
                           <?php
                           echo date_i18n( 'd \d\e F\, Y',
                              strtotime( get_the_date( get_the_ID() ) )
                           );
                           ?>
                        </div>
                        <div class="texto columns mt1 p0 fontS">
                           <p>
                              <?php echo get_the_excerpt(); ?>
                           </p>
                        </div>
                        <div class="botones-acciones columns small-6 absDownR mb1">
                           <div class="columns small-6 p2 primario_acento_bd">
                              <a href="<?php echo $link; ?>">

                                 <div class="columns text-center secundario3">
                                    <i class="fa <?php echo $icon; ?> fontL"></i>
                                 </div>
                                 <div class="columns p0 fontXS text-center neutral_oscuro">
                                    Descargar
                                 </div>
                              </a>

                           </div>
                           <div class="columns small-6 p2 primario_acento_bd">
                              <a href="<?php echo get_the_permalink(get_the_ID()); ?>">
                                 <div class="columns text-center secundario3">
                                    <i class="fa fa-arrow-right fontL"></i>
                                 </div>
                                 <div class="columns p0 fontXS text-center neutral_oscuro">
                                    Ver más
                                 </div>
                              </a>

                           </div>
                        </div>
                     <!-- </a> -->
                     <div class="categorias columns p0">
                        <?php
                        $categorias = get_the_category(get_the_ID());
                        foreach ($categorias as $categoria) {
                           ?>
                           <div class="columns w_a f_l p1 pl0 pt0  end fontXS font2">
                              <div class="secundario1_bg white p1 tarjeta">

                                 <a href="<?php echo get_category_link($categoria -> term_id); ?>" class="white font2">
                                    <?php echo $categoria -> name; ?>
                                 </a>
                              </div>
                           </div>
                           <?php
                        }
                        ?>
                     </div>
                     </div>
                  </article>

                  <?php

               endwhile;
            endif;

            $html = ob_get_contents();
            ob_end_clean();
            $mosaico = $html;

            echo $mosaico;

            ?>


         </div>


      </div>



   </div>



</div>
<!--
.large-5.columns.h_100+.large-7.columns.h_100



<div class="h_100 imgLiquid imgLiquidFill">
<img src="http://fakeimg.pl/400x600" alt="">
</div>


(.large-12.columns.h_20>.large-12.fontXXL.subtitle.bold.black.text-left{subtitulo})+.large-12.columns.minH_60>.large-12.fontL.black.text-left{lorem32}

-->
