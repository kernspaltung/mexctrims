$(document).foundation();

u = new FrontEndUtils();

u.resize();

$(window).resize(function(){
   u.resize();
})
