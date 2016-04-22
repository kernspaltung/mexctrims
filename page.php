<?php get_header();

if(have_posts()) {
while(have_posts()) {
   the_post();
   $title = get_the_title();
   $content = get_the_content();
}
}

?>

<article class="small-12 h_100">
   <header class="medium-4 columns p5 text-left h_100">
      <h1><?php echo $title; ?></h1>
      <nav>
         <ul class="h_50vh scrollH">            
         </ul>
      </nav>
   </header>
   <section id="content" class="medium-8 columns text-left p5 scrollH h_100">
      <?php echo $content; ?>
   </section>

</article>


<script type="text/javascript">

   $('article nav ul').html('');

   var i = 0;
   $('#content').find('h1,h2,h3,h4,h5,h6').each(function(i){
      $(this).attr('data-index',i)
      var newli = $('<li>');

      newli.addClass('mb1 fontXS p2 text-left cursor-pointer');
      newli.html( (i+1) + '. ' + $(this).html());
      newli.attr('data-index',i);

      newli.click(function(){
         var scrollTo = $('#content [data-index='+$(this).data('index')+']').offset().top;

         scrollTo += parseInt($('#content').scrollTop())
         scrollTo -= parseInt($('#content').offset().top)

         $('#content').animate({ scrollTop: scrollTo })

      })

      $('article nav ul').append( newli );

      i++;
   })

</script>


<?php get_footer(); ?>
