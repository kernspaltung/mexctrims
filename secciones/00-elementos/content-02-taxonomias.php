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
            ?>
            <a href="<?php echo get_category_link( $categoria ); ?>">
               <?php $active = in_array( $categoria, $categorias_noticias ) ? 'active primario_acento_bg tarjeta' : ''; ?>
               <li class="small-6 columns fontXS p2 pl0 plr0 text-center <?php echo $active; ?>">
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
