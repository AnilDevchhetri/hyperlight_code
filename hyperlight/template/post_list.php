<?php 

/*
*Template Name: Post List
*
*/

get_header();
?>

<div class="container mt-5 mb-5">
	 <div class="row">
	 	<?php
           $args = array(
               'post_type' => 'post',
                 'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
               
           );
           $query = new WP_Query($args);

           if($query->have_posts()):
                while($query->have_posts()):
                	$query->the_post();
                	if (has_post_thumbnail()) {
                        // Get the URL of the post thumbnail
                       $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // 'full' is the size of the thumbnail, change it as needed

                       // Output the URL
                        $img = "<img src='$thumbnail_url' class='card-img-top' alt=''>";
                    }
                    else{
                    	$img = "<img src='https://yt3.googleusercontent.com/ytc/AIdro_k2wsQa2j9sAhjS25DyZxrhAGDJWtNZBYcLVd3uqQ=s900-c-k-c0x00ffffff-no-rj' class='card-img-top' alt=''>";
                    }

               ?>
			<div class="col-md-4 mb-3">
		      <div class="card" style="width: 18rem;">
                 <?php echo $img ?>
			  
			  <div class="card-body">
			    <h5 class="card-title"><?php the_title(); ?></h5>
			    <p class="card-text"><?php the_content(); ?></p>
			    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
			  </div>
			</div>
			</div>

 

               <?php 
                 endwhile;
                 wp_reset_query();

                 ?>


<div class="container">
                <div class="row justify-content-center">
                    <nav aria-label="Page navigation">
                    	<style>
						      ul.pagination .page-item a,
						       ul.pagination .page-item span{
						    position: relative;
						    display: block;
						    padding: .5rem .75rem;
						    margin-left: -1px;
						    line-height: 1.25;
						    color: #007bff;
						    background-color: #fff;
						    border: 1px solid #dee2e6;
						}
						 ul.pagination .page-item span{
						 	background-color: #007bff !important;
						 	color: #fff;
						 }
                    	</style>
                        <ul class="pagination custom-pagination">
                            <?php
                            // Get the pagination links
                            $paginate_links = paginate_links(array(
                                'total' => $query->max_num_pages,
                                'current' => max(1, get_query_var('paged')),
                                'prev_text' => __('Previous'),
                                'next_text' => __('Next'),
                                'type' => 'array', // Get the pagination links as an array
                                'prev_next' => true,
                            ));

                            if ($paginate_links) {
                                foreach ($paginate_links as $link) {
                                   
                                    
                                    echo "<li class='page-item'>$link</li>";
                                }
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
     
  

                 <?php 
          else :
          	?>
       <div class="col-md-12">
       	  <h4>No Post found</h4>
       </div>
       <?php endif; ?>

	 </div>
	
</div>

<?php get_footer(); ?>