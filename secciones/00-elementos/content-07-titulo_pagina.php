<?php

if( have_posts() ) :
   while( have_posts() ) :
      the_post();
      $title = get_the_title();
   endwhile;
endif;

?>

<div class="small-12 h_15vh p3">
   <div class="vcenter">
      <h3><?php echo $title; ?></h3>
   </div>
</div>
