<!doctype html>
<html class="no-js" lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mexctrims</title>
   <link rel="stylesheet" href="css/app.css">
   <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">

</head>
<body>

      <header id="header" class="row h_15vh h_sm_25vh p0 ">

         <div id="logo" class="small-6 medium-3 large-2 columns h_100 h_sm_50 p0">
            <div class="vcenter">
               <img src="http://fakeimg.pl/200x40" alt="">
            </div>
         </div>


         <div id="header_quicklinks" class="small-6 medium-3 large-2 columns h_sm_50 medium-push-6 large-push-8 text-right p0">

            <div id="area_medicos" class="small-6 medium-12 columns small-text-center medium-text-right h_100">
               <a href="#" class="h_100 w_100">
                  <div class="vcenter text-center">
                        <i class="fa fa-circle-o fontL"></i>
                        <h6 class="fontXS">Médicos</h6>
                  </div>
               </a>
            </div>
            <div id="icono_menu" class="show-for-small-only small-6 columns text-right h_100">
               <a href="#" class="h_100 w_100">
                  <div class="vcenter">
                     <i class="fa fa-bars fontXL"></i>
                           <h6>Menú</h6>
                  </div>
               </a>
            </div>

         </div>


         <div id="menu" class="small-12 medium-6 large-8 columns h_100 h_sm_50 medium-pull-3 large-pull-2 p0 m0">
            <ul class="w_100 h_100 m0 p0 ">

               <?php $paginas = array('Información','Noticias','Descargables'); for ($i=0; $i < 3; $i++) { ?>

               <li class="small-4 columns h_100 w_100 text-center">
                  <a href="#" class="h_100 w_100">
                     <div class="vcenter">
                        <i class="fa fa-circle-o"></i>
                        <div><?php echo $paginas[$i]; ?></div>
                     </div>
                  </a>
               </li>

               <?php } ?>

            </ul>
         </div>


      </header>


      <main class="columns h_75vh h_sm_65vh text-center scrollH rel">
