<?php
/**
 * default search form
 */
?>
<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-wrap">
        <input class="columns small-8" type="search" placeholder="<?php echo esc_attr( 'Búsqueda', 'presentation' ); ?>" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" />
        <input class="columns small-4 screen-reader-text" type="submit" id="search-submit" value="Buscar" />
    </div>
</form>
