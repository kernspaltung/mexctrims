$(document).foundation();

u = new FrontEndUtils();


$(document).ready(function(){


   setup();


})



function setup() {
   u.resize();

   $('.imgLiquid.imgLiquidFill').imgLiquid();
   $('.imgLiquid.imgLiquidNoFill').imgLiquid({ fill: false });

   $(window).resize(function(){
      u.resize();
   })
}
