<?php include("header.php"); ?>
	       <!-- =======VIDEO SECTION========= -->
                        <section class="career_img">
                            <!-- <video width="100%" loop="true" autoplay="true" muted>
                                    <source src="video/circuit_inner.mp4" type="">
                                </video> -->
                                <div class="product-thumbnail">
                                    <img src="img/what-1.jpg" alt="img">
                                </div>
                                <div class="breadcrumb_title">
                                    <h3>Product Detail</h3>
                                    <ul>
                                        <li class="active"><a href="index.php">Home</a></li>
                                        <li><a href="#">Product Detail</a></li>
                                        <li><a href="#">TFLN Packaged Modulators</a></li>
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
									<img src="img/what-1.jpg" alt="img">
								</div> -->
								<div class="product-detail-info">
                                    <div class="product-shown-sec clear">
                                        <div class="product-name-info r-float-none r-fullwidth">
                                            <h2>TFLN Packaged Modulators</h2>
                                            <h6>Compact Optical Power</h6>
                                        </div>
                                        <div class="product-picture-info r-fullwidth">
                                            <img src="img/packaged-modulator.png" alt="img">
                                        </div>
                                    </div>
										<div class="product-desc-detail">
                                            <p>                                       
                                            HyperLight’s thin-film lithium niobate (TFLN) packaged intensity and phase modulators enable customers to achieve unprecedented performances in their systems. These powerful devices offer high bandwidth, low insertion loss, high extinction ratio, low-drive voltages, and the ability to handle high optical powers, which are desired for high-speed modulation systems.
                                            The compact TFLN packaged modulators are ideal for applications including optical communications, radio-over-fiber, quantum control and metrology, test equipment, and fiber optics sensors. To allow easy testing and implementation in various systems, the fully packaged modulators come with standard RF and fiber connectors covering both 1310 nm and 1550 nm. Additional configurations and functionality can be customized upon request.
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
                          <div class="product_detail_desc">
                              <h5>Key Features: </h5>
                              <ul>
                                <li>Low loss integrated waveguides</li>
                                <li>Ultra-High bandwidth modulation (110 GHz and beyond)</li>
                                <li>Record low half-wave voltages (<1 V)</li>
                                <li>Compact footprint</li>
                                <li>High extinction ratio (>25 dB) </li>
                                <li>Stable DC biasing</li>
                                <li>High optical and RF power handling (Watt level)</li>
                              </ul>
                              <h5>Application Scenarios: </h5>
                              <ul>
                                <li>Reference transmitters for test and measurement</li>
                                <li>Optical communication </li>
                                <li>RF over fiber and satellite links</li>
                                <li>Sensing and metrology</li>
                                <li>Mode-locking and laser frequency stabilization </li>
                                <li>Research and Development</li>
                              </ul>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          <div class="mt-3 product_detail_desc">
                            <div class="product-inquiry-form">
                                <div class="inquiry-form">
                                  <form class="row" method="post">
                                      <div class="form-group col-lg-6">
                                         <label for="exampleFormControlInput1">First Name<strong class="star-col-red">*</strong></label>
                                        <input type="text" class="form-control" id="exampleInputName" aria-describedby="name" name="firstname-id">
                                      </div>
                                      <div class="form-group col-lg-6">
                                         <label for="exampleFormControlInput1">Last Name<strong class="star-col-red">*</strong></label>
                                        <input type="text" class="form-control" id="exampleInputName" aria-describedby="name" name="lastname-id">
                                      </div>
                                      <div class="form-group col-lg-12">
                                         <label for="exampleFormControlcompany">Company<strong class="star-col-red">*</strong></label>
                                        <input type="text" class="form-control" id="exampleInputCompany" aria-describedby="name" name="company-id">
                                      </div>
                                      <div class="form-group col-lg-12">
                                         <label for="exampleFormControlcompany">Address<strong class="star-col-red">*</strong></label>
                                        <input type="text" class="form-control" id="address" aria-describedby="name" name="address-id">
                                      </div>
                                      <div class="form-group col-lg-6">
                                         <label for="exampleFormControlInput1">City<strong class="star-col-red">*</strong></label>
                                        <input type="text" class="form-control" id="cityexample" aria-describedby="name" name="city-id">
                                      </div>
                                      <div class="form-group col-lg-6">
                                         <label for="exampleFormControlInput1">State<strong class="star-col-red">*</strong></label>
                                        <input type="text" class="form-control" id="stateexample" aria-describedby="name" name="state-id">
                                      </div>
                                      <div class="form-group col-lg-6">
                                         <label for="exampleFormControlInput1">Zipcode<strong class="star-col-red">*</strong></label>
                                        <input type="text" class="form-control" id="cityexample" aria-describedby="name" name="city-id">
                                      </div>
                                      <div class="form-group col-lg-6">
                                         <label for="exampleFormControlInput1">Country<strong class="star-col-red">*</strong></label>
                                        <input type="email" class="form-control" id="stateexample" aria-describedby="name" name="state-id">
                                      </div>
                                      <div class="form-group col-lg-6">
                                         <label for="exampleFormControlInput1">Email<strong class="star-col-red">*</strong></label>
                                        <input type="email" class="form-control" id="cityexample" aria-describedby="name" name="city-id">
                                      </div>
                                      <div class="form-group col-lg-6">
                                         <label for="exampleFormControlInput1">Phone<strong class="star-col-red">*</strong></label>
                                        <input type="tel" class="form-control" id="phonenumber" aria-describedby="name" name="phone-id">
                                      </div>
                                      <div class="form-group col-lg-6">
                                        <label for="exampleFormControlInput1">Product<strong class="star-col-red">*</strong></label>
                                        <select class="custom-select">
                                          <option selected>Select Product</option>
                                          <option value="1">TFLN Packaged Modulator</option>
                                          <option value="2">TFLN Modulator PICs</option>
                                          <option value="3">TFLN Application-specific PICs</option>
                                        </select>
                                      </div>
                                      <div class="form-group col-lg-12">
                                        <label for="exampleFormControlInput1">Your Inquiry<strong class="star-col-red">*</strong></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Please Enter your Message"></textarea>
                                      </div>
                                      <div class="form-group col-lg-12">
                                       <div class="btn-readarticle btn-send btn-submit-inquiry">
                                            <a class="text-left">Submit</a>
                                            </div>
                                      </div>
                                  </form>
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
                                <img src="img/P1002004.png">
                            </div>
                            <div class="product-info">
                                <h4>TFLN Modulator PICs</h4>
                                <div class="read-btn">
                                    <a href="product-detail2.php" target="_blank">Learn More</a>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="similar_first_prdt float-right r-fullwidth">
                            <div class="latest-product">
                            <div class="product-img">
                                <img src="img/tfln-application-specific.png">
                            </div>
                            <div class="product-info">
                                <h4>TFLN Application-specific PICs</h4>
                                <div class="read-btn">
                                    <a href="product-detail3.php" target="_blank">Learn More</a>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                     <!-- =======SIMILAR PRODUCT SECTION========= -->
                </section>
            <!-- =======BODY SECTION========= -->
<?php include("footer.php"); ?>