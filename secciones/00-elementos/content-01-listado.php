   <div class="minH_100">


   <div class="large-12 columns minH_100 p0">





      <div id="descargables-lista-mosaico" class="large-12 columns h_80vh">
         <!-- Nav / mosaicos -->


         <aside class="large-3 columns h_100 p0" data-sticky-container>
            <div class="sticky h_75vh fontM" data-sticky data-anchor="descargables-mosaico">

               <nav id="descargables-menu-mosaico" class="columns h_70vh m0">
                  <div class="vcenter">
                     <ul class="m0 p0">
                        <?php
                        $categoria_descargables = get_term_by("name","Descargables","category");
                        $categorias = get_term_children( $categoria_descargables -> term_id, "category" );

                        ob_start();
                        foreach ($categorias as $categoria ) {

                           ?>
                              <li class="p1 pl1 pr1 secundario3_bd mb1 tarjeta">
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




         <div id="descargables-mosaico" class="sticky-here large-9 columns h_a p5 pt1 mb2 pb4">

            <?php

            $mosaico;

            ob_start();

            $args = array( 'post_type' => 'descargable', 'posts_per_page' => -1 );

            $q = new WP_Query( $args );

            if( $q -> have_posts() ) :
               while ( $q -> have_posts() ) :
                  $q -> the_post();
                  $archivo = get_post_meta(get_the_ID(),'descargable_archivo',true);
                  $link = $archivo['url'];
                  $type = $archivo['type'];
                  $icon = 'fa-arrow-down';

                  switch( $type ) {
                     case 'application/pdf':
                        $icon = 'fa-file-pdf-o';
                        break;
                  }
                  ?>

                  <article class="medium-6 columns h_55vh p2 text-left rel">

                     <div class="tarjeta h_100 p4 rel white_bg">
                     <a href="<?php echo $link; ?>" class="" target="_blank">
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
                        <div class="columns small-3 p2 absDownR primario_acento_bd">
                              <div class="columns text-center secundario3">
                                 <i class="fa <?php echo $icon; ?> fontL"></i>
                              </div>
                              <div class="columns p0 fontXS text-center neutral_oscuro">
                                 Descargar
                              </div>

                        </div>
                     </a>
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
