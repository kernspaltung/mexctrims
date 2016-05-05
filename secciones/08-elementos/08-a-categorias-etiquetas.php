<!-- Categorias large -->
<aside id="noticias-aside-large" class="large-4 columns show-for-large ha">

  <h2 class="columns fontL p3 text-center">Categorias</h2>

  <ul id="noticias-tags-lista" class="menu small-12 columns p0">
    <?php
    for ($i=0; $i < 12; $i++) {
      echo  '<a href="">
        <li class="small-4 columns fontXS p3 text-center">Categoría' . $i . '</li>
      </a>';
    }
    ?>
  </ul>


  <!-- Etiquetas large -->
  <h2 class="columns fontL p3 text-center">Etiquetas</h2>

  <ul id="noticias-tags-lista" class="menu small-12 columns p0">
    <?php
    for ($i=0; $i < 24; $i++) {
      echo  '<a href="">
        <li class="small-4 columns fontXS p3 text-center">Etiqueta' . $i . '</li>
      </a>';
    }
    ?>
  </ul>

</aside>
<!-- Etiquetas large -->
<!-- Categorias large -->
