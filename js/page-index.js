
var textblocks = {};

$(document).ready(function(){


   var i = 0;

   var headings = $('#page-content').find('h1,h2,h3,h4,h5,h6');

   $('#page-index-menu ul').html('');

   if(headings.length > 1 ){

      headings.each(function(i){

         $(this).attr('data-index',i)
         var newli = $('<li>');

         newli.addClass('fontM p1 pl0 text-left cursor-pointer icono');
         newli.html( '<b>'+(i+1)+'.</b> ' + $(this).html());
         newli.attr('data-index',i);

         newli.click(function(){


            var scrollTo = $('#page-content [data-index='+$(this).data('index')+']').offset().top;

            // scrollTo += parseInt($('body').scrollTop())
            scrollTo -= parseInt($('#page-content').offset().top)

            $('html,body').animate({ scrollTop: scrollTo })

         })

         $('#page-index-menu ul').append( newli );


         i++;
      });





      var new_html = $('<div>');

      headings.each(function(i){


         var next_is_h = false;

         var h = $(this);

         var next = h;

         textblocks = [];

         if(  i < headings.length - 1 ) {

            while( ! next_is_h ) {

               next = next.next();
               next_is_h = next.is('h1,h2,h3,h4,h5,h6');

               if( next_is_h ) {
                  break;
               } else {
                  textblocks.push( next.clone() );
                  next.addClass('cloned');
               }

            }

         } else {

            $('#page-content').children().not('h1,h2,h3,h4,h5,h6,.cloned').each(
               function() {
                  textblocks.push( $(this).clone() );
               }
            )
         }

         new_div = $('<div>').addClass('textblock mb1 p3 p_sm_2');

         new_div.append( h );
         new_div.attr('data-index',h.data('index'));

         for( i in textblocks ) {
            new_div.append( textblocks[i] );
         }

         new_html.append( new_div );


      });


      $('#page-content').html( new_html.html() );





      var scrolling = false;

      $(window).scroll(function(){

         if(!scrolling) {
            scrolling = setTimeout(function(){

               // check if visible:
               $('#page-content .textblock').each(function(){

                  if ( u.isElementInView( $(window), $(this), true ) ) {
                     console.log($(this).attr('data-index'));
                     $('article nav ul li').removeClass('current');
                     $('article nav ul li[data-index='+$(this).data('index')+']').addClass('current');
                     console.log($(this).data('index'));

                  }

               })

               scrolling = false;

            }, 150 );

         }
      });
      $(window).trigger('scroll');
   }
});
