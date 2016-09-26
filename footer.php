         </div>
         <?php
         global $block_ads;
         if( ! is_page('Información') && ! is_page('Médicos') && ! $block_ads ) : ?>

            <aside id="enlaces_destacados" class="medium-3 large-2 columns fontM" data-sticky-container> <!-- antes h_100 -->
               <div class="sticky h_75vh fontM white_bg" data-sticky data-anchor="plantillas" data-margin-top="7">
                  <?php get_template_part( 'secciones/00-elementos/content', '06-enlaces_destacados' ); ?>
               </div>
            </aside>

         <?php endif; ?>
      </main>


      <footer id="footer" class="columns h_10vh fixed bottom white_bg z1k p0 text-right">
         <div class="small-12 medium-6 large-4 medium-offset-9 large-offset-8 columns p0 h_100 rel">
            <div class="small-4 columns text-center vcenter p0 secundario1_hover icono  p1" style="color:#3b5998">
               <a href="http://facebook.com/mexctrims" target="_blank">
                  <i class="fa fa-facebook columns fontL" style="color:#3b5998"></i>
                  <span class="columns fontS p2 pb0">Facebook</span>
               </a>
            </div>
            <div class="small-4 columns text-center vcenter p0 secundario1_hover icono p1" style="color:#1A8BF0">
               <a href="#" target="_blank" class="primario_hover">
                  <i class="fa fa-twitter columns fontL" style="color:#1A8BF0"></i>
                  <span class="columns fontS p1 pb0">Twitter</span>
               </a>
            </div>
            <div class="boton-contacto small-4 columns text-center vcenter p0 secundario1_hover icono p1" style="color:#b9cf46">
               <a href="#" target="_blank" class="primario_hover">
                  <i class="fa fa-envelope columns fontL" style="color:#b9cf46"></i>
                  <span class="columns fontS p1 pb0">Contáctanos</span>
               </a>
            </div>
         </div>
      </footer>



<?php wp_footer(); ?>

</body>
</html>
