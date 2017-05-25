<?php
/*

Page Template:
Automatically takes all headings in the content, and creates an Index.

////

Plantilla de Página:
Automáticamente toma los titulares del contenido, y construye un índice.


*/


get_header();

if(have_posts()) {
   while(have_posts()) {
      the_post();
      $title = get_the_title();
      $content = apply_filters('the_content', get_the_content());
   }
}

?>

<article class="small-12 h_75vh">
   <header class="medium-4 columns p5 text-left h_100 h_50vh" data-sticky-container>
      <div class="sticky ml0 p0" data-sticky data-achor="plantillas" data-margin-top="2">
         <h4>
            <a href="<?php echo get_the_permalink($post->post_parent); ?>">
               <?php echo get_post($post->post_parent)->post_title; ?>
            </a>
            <i class="fa fa-angle-right p2 pt0 pb0 secundario1 "></i>
            <?php echo $title; ?>
         </h4>
         <div class="columns fontM p3 icono pl0 mb1">
            <a href="<?php echo get_the_permalink($post->post_parent); ?>">
               <i class="fa fa-arrow-left p1 pl0 complementario"></i>
               <span class="p1">Regresar</span>

            </a>
         </div>
         <nav id="page-index-menu">

            <ul class="h_100 m0 p0">
            </ul>

         </nav>
      </div>
   </header>
   <section id="page-content" class="medium-8 columns text-left p5 h_a">
      
      <?php echo $content; ?>
   </section>

</article>




<?php get_footer(); ?>
