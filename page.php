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
      <div class="sticky ml0 p0" data-sticky data-achor="plantillas">
         <h1><?php echo $title; ?></h1>
         <nav>

            <ul class="h_100 m0 p0">
            </ul>

         </nav>
      </div>
   </header>
   <section id="page-content" class="medium-8 columns text-left p5 h_a">
      <?php echo $content; ?>
   </section>

</article>


<script type="text/javascript">

   $('article nav ul').html('');

   var i = 0;
   $('#page-content').find('h1,h2,h3,h4,h5,h6').each(function(i){
      $(this).attr('data-index',i)
      var newli = $('<li>');

      newli.addClass('fontM p2 pl0 text-left cursor-pointer');
      newli.html( (i+1) + '. ' + $(this).html());
      newli.attr('data-index',i);

      newli.click(function(){


         var scrollTo = $('#page-content [data-index='+$(this).data('index')+']').offset().top;

         // scrollTo += parseInt($('body').scrollTop())
         scrollTo -= parseInt($('#page-content').offset().top)

         $('html,body').animate({ scrollTop: scrollTo })

      })

      $('article nav ul').append( newli );

      i++;
   })

</script>


<?php get_footer(); ?>
