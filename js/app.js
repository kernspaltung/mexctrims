//$(document).foundation();

u = new FrontEndUtils();


$(document).ready(function(){

   setup();
   resize_setup();
   $(document).foundation();

   $('#header_quicklinks #buscar').unbind('click');

      $('#header_quicklinks #buscar').click(function(){

      $('#header_quicklinks #buscar, #header_quicklinks #contacto').addClass('hidden');
      $('#header_quicklinks #buscar_input').removeClass('hidden');

   })


})
var resizeTimeout = false;
function resize_setup() {

   if( ! resizeTimeout) {
      do_resize();
      resizeTimeout = setTimeout(function(){

         do_resize();
         resizeTimeout=false;

      },100);
   }

}


function do_resize() {
   fix_sticky();
}
function fix_sticky() {
   if( $('.sticky-here').length > 0 ) {
      $('.sticky').attr('data-anchor',$('.sticky-here').attr('id'));
   }
   $('.sticky').attr('data-margin-top', Math.ceil ( parseInt( $('#header').height()) / 14 ) );
   $('.sticky').attr('data-margin-top', Math.ceil ( parseInt( $('#header').height()) / 14 ) );
   // $('#noticias-aside-large .sticky').attr('data-margin-top', Math.ceil ($('#header').height() / 14 ) + 4 );
}


$(window).resize(function(){
   resize_setup();
});

function setup() {
   u.resize();

   $('.imgLiquid.imgLiquidFill').imgLiquid();
   $('.imgLiquid.imgLiquidNoFill').imgLiquid({ fill: false });

   $(window).resize(function(){
      u.resize();
   });

   // $('#inicio-noticias-small .accordion-item').each(function(){
   //    var titulo = $(this).find('h3');
   //    var contenido = $(this).find('.accordion-content').html();
   //
   //    var noticia_medium = $('<div>');
   //
   //    noticia_medium.addClass('small-12 columns h_30vh mb2');
   //
   //    noticia_medium.append( titulo )
   //    noticia_medium.append( contenido )
   //
   //    $('#inicio-noticias-medium').append( noticia_medium );
   // })

}
