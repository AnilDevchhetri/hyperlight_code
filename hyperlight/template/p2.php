<?php /*template name: P2*/ ?>
<?php get_header(); ?>

   <!-- =======VIDEO SECTION========= -->
                        <section class="career_img">
                            <!-- <video width="100%" loop="true" autoplay="true" muted>
                                    <source src="video/circuit_inner.mp4" type="">
                            </video> -->
                                <div class="product-thumbnail">
                                    <img src="<?php bloginfo('template_url'); ?>/img/what-2.jpg" alt="img">
                                </div>
                                <div class="breadcrumb_title">
                                    <h3>Product Detail</h3>
                                    <ul>
                                        <li class="active"><a href="index.php">Home</a></li>
                                        <li><a href="#">Product Detail</a></li>
                                        <li><a href="#">TFLN Modulator PICs</a></li>
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
                                            <h2>TFLN Modulator PICs</h2>
                                    <h6>Scale up. Power down</h6>
                                        </div>
                                        <div class="product-picture-info r-fullwidth">
                                            <img src="<?php bloginfo('template_url'); ?>/img/P1002004.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="product-desc-detail">
										<p>
											HyperLight's scalable photonic integrated circuits (PICs) provide disruptive advantages for customers needing high-bandwidth and low-power electro-optic solutions, including data center, telecommunications, radio communication, sensing, and LiDAR applications. Using a streamlined rapid prototyping to volume manufacturing process, the PICs are customized and volume produced based on their specific use.
                                            Example configurations include modulator array PICs for data communication applications , modulator array PICs for millimeter wave systems, IQ modulator PICs for telecommunication that all feature sub-volt driving voltages operating with over 100 GHz analog bandwidth. 

										</p>
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
                              <h5>Key Features: </h5>
                              <ul>
                                  <li>Small, medium and large chip quantities available</li>
                                  <li>Compelling volume-dependent pricing</li>
                                  <li>Known good dies with qualified performance</li>
                              </ul>
                              <h5>Application Scenarios: </h5>
                              <ul>
                                  <li>Telecom</li>
                                  <li>Datacom</li>
                                  <li>LIDAR</li>
                                  <li>5G/6G</li>
                              </ul>
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
                        <div class="similar_first_prdt float-left r-fullwidth">
                            <div class="latest-product">
                            <div class="product-img">
                                <img src="<?php bloginfo('template_url'); ?>/img/packaged-modulator.png">
                            </div>
                            <div class="product-info">
                                <h4>TFLN Packaged Modulators</h4>
                                <div class="read-btn">
                                    <a href="<?php echo home_url(); ?>/hyperlight/product1/" target="_blank">Learn More</a>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="similar_first_prdt float-right r-fullwidth">
                            <div class="latest-product">
                            <div class="product-img">
                                <img src="<?php bloginfo('template_url'); ?>/img/tfln-application-specific.png">
                            </div>
                            <div class="product-info">
                                <h4>TFLN Application-specific PICs</h4>
                                <div class="read-btn">
                                    <a href="<?php echo home_url(); ?>/hyperlight/product3/" target="_blank">Learn More</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                     <!-- =======SIMILAR PRODUCT SECTION========= -->
                </section>
            <!-- =======BODY SECTION========= -->

<?php get_footer(); ?>