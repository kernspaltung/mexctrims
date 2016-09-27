<?php get_header(); ?>

<div class="columns h_100">

<h1 class="mt1 mb1 text-left">
   Búsqueda: <span class="search-highlight"><?php echo get_search_query(); ?></span>
</h1>

<?php if( have_posts() ) : ?>
<?php while( have_posts() ) : the_post(); ?>

   <article class="columns p5 tarjeta white_bg mt2 mb2 text-left">
      <a href="<?php echo get_the_permalink( get_the_ID() ); ?>">
         <h5>
            <?php echo search_title_highlight(); ?>
         </h5>
         <small>
            <?php echo get_the_date( 'd \d\e F\, Y', get_the_ID() ); ?>
         </small>
         <p>
            <?php echo apply_filters( 'the_excerpt', search_excerpt_highlight() ); ?>
         </p>
         <span class="contenido fontM">
            <?php echo apply_filters( 'the_content', search_content_highlight() ); ?>
         </span>
      </a>
   </article>

<?php endwhile; ?>
<?php endif; ?>

</div>

<?php get_footer(); ?>
