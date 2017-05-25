<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

   <title>Mexctrims</title>

  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/img/fav.png">

  <?php wp_head(); ?>

</head>
<body>

   <?php
   $color_orilla = 'neutral_bd';
   if( is_page('Inicio') )
      $color_orilla = 'transparente_bd';
   if( is_page('Información') || $post->post_parent == get_page_by_title('Información')->ID )
      $color_orilla = 'secundario1_bd';
   if( is_page('Noticias') )
      $color_orilla = 'secundario2_bd';
   if( is_page('Artículos') )
      $color_orilla = 'secundario3_bd';
   if( is_page('Médicos') )
      $color_orilla = 'primario_bd';
   if( is_page('Contáctanos') || is_page('Contribuye') )
      $color_orilla = 'primario_acento_bd';
   ?>

   <header id="header" class="columns small-12 h_15vh h_sm_25vh p0 fixed white_bg z1k1 <?php echo $color_orilla; ?>">

      <div id="logo" class="small-6 medium-3 large-2 columns h_100 h_sm_50 p0">
         <a href="<?php echo site_url(); ?>" class="button white_bg black small-12 h_15vh m0 p0">
            <div class="vcenter">
               <!-- <img data-interchange="[<?php echo get_stylesheet_directory_uri(); ?>/img/logotipo-150w.png, (default)], [<?php echo get_stylesheet_directory_uri(); ?>/img/logotipo-150w-2x.png, (retina)]">           -->
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logotipo-150w.png">
            </div>
         </a>
      </div>


      <div id="header_quicklinks" class="small-6 medium-3 columns h_sm_50 medium-push-6 large-push-7 text-right p0">

         <div id="area_medicos" class="small-6 medium-4 columns small-text-center medium-text-right h_100">

            <?php $page = get_page_by_title('Médicos'); ?>

            <a href="<?php echo get_the_permalink( $page->ID ); ?>" class="button white_bg black small-12 h_15vh m0 p0">
               <div class="vcenter icono">
                  <i class="fa fa-user-md fontXL p2 primario"></i>
                  <h6 class="fontM font_sm_S  neutral_oscuro"><?php echo get_the_title( $page->ID ); ?></h6>
               </div>
            </a>
         </div>
         <div id="contacto" class="boton-contacto hide-for-small-only medium-4 columns small-text-center medium-text-right h_100">
            <a href="<?php echo get_the_permalink( get_page_by_title("Contáctanos")->ID ); ?>" class="button white_bg black small-12 h_15vh m0 p0">
               <div class="vcenter icono">
                  <i class="fa fa-envelope fontL p2 neutral"></i>
                  <h6 class="fontM font_sm_S neutral_oscuro">
                     Contáctanos
                  </h6>
               </div>
            </a>
         </div>
         <div id="buscar" class="small-6 medium-4 columns small-text-center medium-text-right h_100">
            <div class="button white_bg black small-12 h_15vh m0 p0">
               <div class="vcenter icono">
                  <i class="fa fa-search fontL p2 neutral"></i>
                  <h6 class="fontM font_sm_S neutral_oscuro">
                     Buscar
                  </h6>
               </div>
            </div>
         </div>
         <div id="buscar_input" class="columns small-12 medium-8 absUpR text-center medium-text-right h_100 hidden pt3 p_sm_4 white_bg">
            <?php echo get_search_form(); ?>
         </div>

      </div>

    </div>


    <div id="menu" class="small-12 medium-5 columns h_100 h_sm_50 medium-pull-4 p0 m0">
      <ul class="w_100 h_100 m0 p0 ">

         <?php
        $paginas = array( 'Información', 'Noticias', 'Artículos' );
        $iconos = array( 'question', 'newspaper-o', 'download','check-square-o');
        $colores = array( 'secundario1', 'secundario2', 'secundario3','primario_acento txsh1');

        for ($i=0; $i < 3; $i++) {
          $page = get_page_by_title($paginas[$i]);
          $icono = $iconos[$i];
          ?>

          <li class="small-4 columns w_100 text-center h_100 neutral_oscuro">
            <a href="<?php echo get_the_permalink( $page->ID ); ?>" class="button white_bg black small-12 h_100 m0 p0"> <!-- antes h_15vh -->
              <div class="vcenter icono">
                <i class="fa fa-<?php echo $icono; ?> fontL font-md-XL p2 <?php echo $colores[$i]; ?>"></i>
                <div class="neutral fontM font_sm_S"><?php echo get_the_title( $page->ID ); ?></div>
              </div>
            </a>
          </li>

          <?php } ?>

        </ul>
      </div>


    </header>


    <main id="principal" class="columns h_a pl0 pr0 pt_15vh pt_sm_25vh mb_10vh">

      <?php get_template_part('secciones/00-elementos/content','00-portada_variable'); ?>
      <!-- sustitui ' h_100 ' POR ' minH_100 '  para que se acomodara el contenido en tamanos -->
      <div id="plantillas" class="medium-9 large-10 columns minH_100 scroll_md_h rel text-center">
