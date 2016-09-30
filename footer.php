         </div>
         <?php
         global $block_ads;
         if( ! is_page('Información') && ! is_page('Médicos') && ! $block_ads ) : ?>

            <aside id="enlaces_destacados" class="medium-3 large-2 columns fontM p0" data-sticky-container> <!-- antes h_100 -->
               <div class="sticky h_75vh fontM white_bg" data-sticky data-anchor="plantillas" data-margin-top="5">
                  <?php get_template_part( 'secciones/00-elementos/content', '06-enlaces_destacados' ); ?>
               </div>
            </aside>

         <?php endif; ?>
      </main>


      <footer id="footer" class="columns h_10vh h_sm_12vh fixed bottom white_bg z1k p0 text-right">
         <div class="small-12 medium-6 columns p0 h_100 h_sm_50 rel">
            <div class="small-4 columns text-center vcenter p0 secundario1_hover icono  p1" style="color:#3b5998">
               <a href="http://facebook.com/mexctrims" target="_blank">
                  <i class="fa fa-facebook columns font_sm_L font_md_L font_lg_XL" style="color:#3b5998"></i>
                  <span class="columns font_sm_XS font_md_S font_lg_M p2 pb0 hide-for-small-only">Facebook</span>
               </a>
            </div>
            <div class="small-4 columns text-center vcenter p0 secundario1_hover icono p1" style="color:#1A8BF0">
               <a href="#" target="_blank" class="primario_hover">
                  <i class="fa fa-twitter columns font_sm_L font_md_L font_lg_XL" style="color:#1A8BF0"></i>
                  <span class="columns font_sm_XS font_md_S font_lg_M p1 pb0 hide-for-small-only">Twitter</span>
               </a>
            </div>
            <div class="boton-contacto small-4 columns text-center vcenter p0 secundario1_hover icono p1" style="color:#b9cf46">
               <a href="#" target="_blank" class="primario_hover">
                  <i class="fa fa-envelope columns font_sm_L font_md_L font_lg_XL" style="color:#b9cf46"></i>
                  <span class="columns font_sm_XS font_md_S font_lg_M p1 pb0 hide-for-small-only">Contáctanos</span>
               </a>
            </div>
         </div>
         <div class="columns medium-6 columns text-center p0 p1 h_100 h_sm_50" style="color:#b9cf46">

           <div class="columns font_sm_XXS font_md_M font_lg_L p1 pb0 vcenter black"> <i class="fa fa-copyright"></i> Mexctrims 2016</div>

         </div>
      </footer>



<?php wp_footer(); ?>

</body>
</html>
