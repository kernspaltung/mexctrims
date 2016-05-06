<!-- Categorias large -->
<aside id="noticias-aside-large" class="h_100 large-4 columns show-for-large ha" data-sticky-container>
 <div class="sticky h_75vh fontM" data-sticky data-anchor="plantillas" data-margin-top="9">

  <h2 class="columns fontL p3 text-center">Categorias</h2>

  <ul id="noticias-tags-lista" class="menu small-12 columns p0 h_20vh scrollH">
    <?php
    for ($i=0; $i < 12; $i++) {
     echo  '<a href="">
        <li class="small-4 columns fontXXS p3 text-center">Categoría' . $i . '</li>
     </a>';
    }
    ?>
  </ul>


<!-- Etiquetas large -->
  <h2 class="columns fontL p3 text-center">Etiquetas</h2>

  <ul id="noticias-tags-lista" class="menu small-12 columns p0 h_20vh scrollH">
    <?php
    for ($i=0; $i < 24; $i++) {
     echo  '<a href="">
        <li class="small-4 columns fontXXS p3 text-center">Etiqueta' . $i . '</li>
     </a>';
    }
    ?>
  </ul>

 </div>
</aside>
<!-- Etiquetas large -->
<!-- Categorias large -->
