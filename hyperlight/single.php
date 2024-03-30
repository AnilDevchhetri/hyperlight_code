<?php 
get_header();
?>
 <?php 

  while(have_posts()){
  	the_post();

 ?>
 <div class="container m-5">
 	
 
 <p>
 	
 	 <?php //the_content(); ?>
 </p>



<?php   } ?>

</div>



<?php get_footer(); ?>