
<?php get_header(); ?>

   <!-- =======VIDEO SECTION========= -->
                        <section class="career_img">
                            <!-- <video width="100%" loop="true" autoplay="true" muted>
                                    <source src="video/circuit_inner.mp4" type="">
                            </video> -->
                                <div class="product-thumbnail">
                                    <?php
                              
                                     $image = get_field('single_post_banner_image');
                                    
                
                                    ?>
                                    
                                    <img src="<?php echo esc_url($image); ?>" alt="img">
                                    
                                </div>
                                <div class="breadcrumb_title">
                                    <h3>Product Detail</h3>
                                    <ul>
                                        <li class="active"><a href="<?php echo home_url(); ?>">Home</a></li>
                                         <li><a href="#"><?php the_title(); ?></a></li>
                                    </ul>
                                </div>
                        </section>
                      
            <!-- =======VIDEO SECTION========= -->

            <!-- =======BODY SECTION========= -->
            	<section class="container product_custom_container mt-5 mb-5">
                    <div class="row">
                    	<div class="col-md-12">
	                    	<div class="product-detail">
								<!-- <div class="product-thumbnail">
									<img src="img/what-2.jpg" alt="img">
								</div> -->
								<div class="product-detail-info">
                                    <div class="product-shown-sec clear">
                                        <div class="product-name-info r-float-none r-fullwidth">
                                            <h2><?php
                                            
                                            the_title(); ?></h2>
                                    <h6><?php the_field('product_subtitle');  ?></h6>
                                        </div>
                                        <div class="product-picture-info r-fullwidth">
                                            <?php 
                                             if(has_post_thumbnail()) {      
                         $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'products');?> 
              
                 <img  src="<?php echo $image[0];?>"  alt="img">
             <?php }?>
                                            

                                          
                                        </div>
                                    </div>
                                    <div class="product-desc-detail">
										
										 <?php the_content(); ?>
										        </div>
								</div>
							</div>
                    	</div>
                    </div>

                    	<!-- =======PRODUCT DETAIL TAB SECTION========= -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Product Detail</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Product Inquiry</a>
                          </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <div class="mt-3 product_detail_desc">
                              <?php the_field('product_additional_details'); ?>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          <div class="mt-3 product_detail_desc">
                            <div class="product-inquiry-form">
                                <div class="inquiry-form">
                                  <!-- product form start -->
                                    
                                     <?php  echo do_shortcode('[contact-form-7 id="29" title="Product Form"]'); ?>
                                    
                                      <!-- product form start -->
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                    <!-- =======PRODUCT DETAIL TAB SECTION========= -->

                     <!-- =======SIMILAR PRODUCT SECTION========= -->
                    <h2 class="mt-5 mb-4">Other Products</h2>
                    <div class="similar-product r-fullwidth clearfix">
                       
                   <?php 
                     $current_post_id = get_the_id();

                      $args = array(
                           'post_type'      => 'products',
                           'posts_per_page' => 2,
                           'post__not_in'   => array( $current_post_id ),
                         
                           
                       );
                      $related_posts_query = new WP_Query( $args );

                   ?>
                     <?php 
                           if ( $related_posts_query->have_posts() ) {

                             
                            while( $related_posts_query->have_posts() ) {
                                $related_posts_query->the_post();
                                ?>
                       
                        <div class="similar_first_prdt float-left r-fullwidth">
                            <div class="latest-product">
                            <div class="product-img">
                                <?php 
                        if(has_post_thumbnail()) {      
                         $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'products');?> 
              
                          <img  src="<?php echo $image[0];?>"  alt="img">
                                <?php }?>
                                            
                            </div>
                            <div class="product-info">
                                <h4><?php the_title(); ?></h4>
                                <div class="read-btn">
                                    <a href="<?php the_permalink(); ?>" target="_blank">Learn More</a>
                                </div>
                            </div>
                        </div>
                        </div>
        
                            <?php 
                            }//end while;


                         } //end if
                     ?>


                    </div>
                     <!-- =======SIMILAR PRODUCT SECTION========= -->
                </section>
            <!-- =======BODY SECTION========= -->

<?php get_footer(); ?>