<!-- Categorias large -->
<aside id="noticias-aside-large" class="taxonomias h_100 large-4 columns show-for-large ha " data-sticky-container>
   <div class="sticky h_75vh fontM p4" data-sticky data-anchor="plantillas" data-margin-top="9">

      <h2 class="columns fontL p3 text-center">Categorias</h2>

      <ul id="noticias-tags-lista" class="menu small-12 columns p0 h_20vh scrollH">
         <?php

         $medicos_destacada = get_term_by('name','Destacada Médicos', 'category' );
         $medicos = get_term_by('name','Médicos', 'category' );
         $noticia_principal = get_term_by('name','Noticia Principal', 'category' );
         $noticias = get_term_by('name','Noticias', 'category' );
         $categorias_excluidas  = array( 1, $medicos_destacada -> term_id, $medicos->term_id, $noticia_principal->term_id, $noticias->term_id, );

         $todas_categorias = get_categories();
         foreach( get_the_category() as $la_categoria ) :
            $las_categorias[] = $la_categoria->term_id;
         endforeach;

         if( $todas_categorias )
         foreach( $todas_categorias as $categoria ) :
            if( ! in_array( $categoria->term_id, $categorias_excluidas ) ):
               ?>
               <a href="<?php echo get_category_link( $categoria -> term_id ); ?>">
                  <?php $active = in_array( $categoria->term_id, $las_categorias ) ? 'active primario_acento_bg tarjeta' : ''; ?>
                  <li class="small-4 columns fontXXS p3 text-center <?php echo $active; ?>">
                     <?php echo $categoria->name; ?>
                  </li>
               </a>
               <?php
            endif;
         endforeach;
         ?>
      </ul>


      <!-- Etiquetas large -->
      <h2 class="columns fontL p3 text-center">Etiquetas</h2>

      <ul id="noticias-tags-lista" class="menu small-12 columns p0 h_20vh scrollH">
         <?php
         $todas_etiquetas = get_tags();
         foreach( get_the_tags() as $la_etiqueta ) :
            $las_etiquetas[] = $la_etiqueta->term_id;
         endforeach;

         if( $todas_etiquetas )
         foreach( $todas_etiquetas as $etiqueta ) :
            ?>

            <a href="<?php echo get_tag_link( $etiqueta->term_id); ?>">
               <?php $active = in_array( $etiqueta->term_id, $las_etiquetas ) ? 'active active primario_acento_bg tarjeta' : ''; ?>
               <li class="small-3 columns fontXXS p2 text-center <?php echo $active; ?>">
                  <?php echo $etiqueta->name; ?>
               </li>
            </a>

            <?php
         endforeach;
         ?>
      </ul>

   </div>
</aside>
<!-- Etiquetas large -->
<!-- Categorias large -->
