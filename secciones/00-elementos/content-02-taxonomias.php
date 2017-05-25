<!-- Categorias large -->
<aside id="noticias-aside-large" class="taxonomias h_70vh large-4 columns show-for-large " data-sticky-container>
   <div class="sticky h_70vh fontM " data-sticky data-anchor="plantillas" data-margin-top="3">

      <h6 class="columns p2  font2 text-left">Categorias</h6>

      <ul id="noticias-tags-lista" class="menu small-12 columns p2 pt0 pl0 h_30vh scrollH">
         <?php

         // $medicos_destacada = get_term_by('name','Destacada Médicos', 'category' );
         // $medicos = get_term_by('name','Médicos', 'category' );
         // $noticia_principal = get_term_by('name','Noticia Principal', 'category' );
         // $categorias_excluidas  = array( 1, $medicos_destacada -> term_id, $medicos->term_id, $noticia_principal->term_id );
         //
         $noticias = get_term_by('name','Noticias', 'category' );

         $categorias_noticias = get_term_children($noticias->term_id,'category');



         foreach( $categorias_noticias as $categoria ) :

            $cat_url = get_the_permalink( get_page_by_title('Noticias') );
            $cat_url = add_query_arg( 'cat', $categoria, $cat_url);

            ?>
            <a href="<?php echo $cat_url; ?>" class="columns small-6 p2">
               <?php $active = (((int)get_query_var('cat')) == $categoria) ? 'active primario_acento_bg ' : 'primario_acento_bd'; ?>
               <li class="columns fontXS p2 pl0 plr0 text-center tarjeta <?php echo $active; ?>">
                  <?php echo get_term($categoria)->name; ?>
               </li>
            </a>
            <?php
         endforeach;
         ?>
      </ul>


      <!--
      <h6 class="columns p2  font2 text-left">Etiquetas</h6>

      <ul id="noticias-tags-lista" class="menu small-12 columns p0 h_20vh scrollH">
         <?php
         $todas_etiquetas = get_tags();
         $las_etiquetas = array();
         foreach( get_the_tags() as $la_etiqueta ) :
            $las_etiquetas[] = $la_etiqueta->term_id;
         endforeach;

         if( is_array($todas_etiquetas) )
         foreach( $todas_etiquetas as $etiqueta ) :
            ?>

            <a href="<?php echo get_tag_link( $etiqueta->term_id); ?>">
               <?php $active = in_array( $etiqueta->term_id, $las_etiquetas ) ? 'active active primario_acento_bg tarjeta' : ''; ?>
               <li class="w_a f_l columns fontXXS p2 text-center <?php echo $active; ?>">
                  <?php echo $etiqueta->name; ?>
               </li>
            </a>

            <?php
         endforeach;
         ?>
      </ul>

   </div>
-->
</aside>
