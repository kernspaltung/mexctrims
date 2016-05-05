//$(document).foundation();

u = new FrontEndUtils();


var resizeTimeout = false;
resize_setup();

$(document).ready(function(){

   setup();
   resize_setup();

   setTimeout(function(){
      $(document).foundation();
   },500)


})
function resize_setup() {

   if( ! resizeTimeout) {
      do_resize();
      resizeTimeout = setTimeout(function(){

         do_resize();
         resizeTimeout=false;

      },100);
   }
   function do_resize() {
      fix_sticky();
   }

   function fix_sticky() {
      if( $('.sticky-here').length > 0 ) {
         $('.sticky').attr('data-anchor', $('.sticky-here').attr('id') );
      }
      $('.sticky').attr('data-margin-top', Math.ceil ( parseInt( $('#header').height()) / 14 ) );
      $('#noticias-aside-large .sticky').attr('data-margin-top', Math.ceil ($('#header').height() / 14 ) + 4 );
   }

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

}
