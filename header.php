<!doctype html>
<html class="no-js" lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mexctrims</title>

   <?php wp_head(); ?>

</head>
<body>

   <header id="header" class="small-12 h_15vh h_sm_25vh p0 fixed white_bg z1k1">

      <div id="logo" class="small-6 medium-3 large-2 columns h_100 h_sm_50 p0">
         <a href="<?php echo site_url(); ?>" class="button white_bg black small-12 h_15vh m0 p0">
            <div class="vcenter">
               <!-- <img data-interchange="[<?php echo get_stylesheet_directory_uri(); ?>/img/logotipo-150w.png, (default)], [<?php echo get_stylesheet_directory_uri(); ?>/img/logotipo-150w-2x.png, (retina)]">           -->
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logotipo-150w.png">
            </div>
         </a>
      </div>


      <div id="header_quicklinks" class="small-6 medium-3 columns h_sm_50 medium-push-6 large-push-7 text-right p0">

         <div id="area_medicos" class="small-6 medium-4 columns small-text-center medium-text-right h_100 secundario1 txsh1">

            <?php $page = get_page_by_title('Médicos'); ?>

            <a href="<?php echo get_the_permalink( $page->ID ); ?>" class="button white_bg black small-12 h_15vh m0 p0">
               <div class="vcenter">
                  <i class="fa fa-user-md fontXL p2"></i>
                  <h6 class="fontS"><?php echo get_the_title( $page->ID ); ?></h6>
               </div>
            </a>
         </div>
         <div id="contacto" class="boton-contacto hide-for-small-only medium-4 columns small-text-center medium-text-right h_100 neutral">
            <a href="<?php echo get_the_permalink( $page->ID ); ?>" class="button white_bg black small-12 h_15vh m0 p0">
               <div class="vcenter">
                  <i class="fa fa-envelope fontXL p2"></i>
                  <h6 class="fontS">
                     Contáctanos
                  </h6>
               </div>
            </a>
         </div>
         <div id="buscar" class="small-6 medium-4 columns small-text-center medium-text-right h_100 neutral">
            <a href="<?php echo get_the_permalink( $page->ID ); ?>" class="button white_bg black small-12 h_15vh m0 p0">
               <div class="vcenter">
                  <i class="fa fa-search fontXL p2"></i>
                  <h6 class="fontS">
                     Buscar
                  </h6>
               </div>
            </a>
         </div>

      </div>


      <div id="menu" class="small-12 medium-6 columns h_100 h_sm_50 medium-pull-3 p0 m0">
         <ul class="w_100 h_100 m0 p0 ">

            <?php

            $paginas = array( 'Información', 'Noticias', 'Descargables', 'Regístrate' );
            $iconos = array( 'question', 'newspaper-o', 'download','check-square-o');
            $colores = array( 'secundario1', 'secundario2', 'secundario3','primario_acento txsh1');

            for ($i=0; $i < 4; $i++) {
               $page = get_page_by_title($paginas[$i]);
               $icono = $iconos[$i];
               ?>

               <li class="small-3 columns w_100 text-center h_100 <?php echo $colores[$i]; ?>">
                  <a href="<?php echo get_the_permalink( $page->ID ); ?>" class="button white_bg black small-12 h_100 m0 p0"> <!-- antes h_15vh -->
                     <div class="vcenter">
                        <i class="fa fa-<?php echo $icono; ?> fontXL p2"></i>
                        <div><?php echo get_the_title( $page->ID ); ?></div>
                     </div>
                  </a>
               </li>

               <?php } ?>

            </ul>
         </div>


      </header>


      <main id="principal" class="columns h_a pt_15vh pt_sm_25vh mb_10vh">

         <?php get_template_part('secciones/00-elementos/content','00-portada_variable'); ?>
         <!-- sustitui ' h_100 ' POR ' minH_100 '  para que se acomodara el contenido en tamanos -->
         <div id="plantillas" class="medium-9 large-10 columns minH_100 scroll_md_h rel text-center">
