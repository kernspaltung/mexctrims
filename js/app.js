//$(document).foundation();

u = new FrontEndUtils();


$(document).ready(function(){

   setup();
   resize_setup();
   $(document).foundation();



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

   function do_resize() {
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
