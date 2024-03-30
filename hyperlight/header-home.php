<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Hyperlight</title>
<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.jpg">

<?php wp_head();?>
</head>

<body>
<!-- scrollToTop --> 
<!-- ================ -->
<!-- <div class="scrollToTop"><i class="fas fa-chevron-up"></i></div> -->
  
 <!-- =======HEADER SECTION========= -->
         <section id="mainsec">
            <div class="header-sec" id=#home>
                <div class="navbar-area nav1">
                    <div class="container custom-container r-pd-none">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">
                          <a class="navbar-brand" href="<?php echo home_url(); ?>">
                            <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                           $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                           // echo $image[0];
                           ?>
                          <img src="<?php echo $image[0] ?>" alt=" <?php if(is_front_page() || is_home()){
        echo get_bloginfo('name');
    } else{
        echo wp_title('');
    }?>">
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <!-- <span class="navbar-toggler-icon"></span> -->
                            <div class="clearfix">
                            <span class="menu-col float-left">Menu</span><span class="fa fa-bars float-right bar-icon"></span>
                          </div>
                          </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                  <a class="nav-link" href="<?php echo home_url(); ?>"></i>Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Company
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="#about">Discover HyperLight</a>
                                      <a class="dropdown-item" href="#team">Our Impact</a>
                                      <a class="dropdown-item" href="<?php echo home_url(); ?>/hyperlight/news/">News</a>
                                      <a class="dropdown-item" href="<?php echo home_url(); ?>/hyperlight/events/">Events</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->Products
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="<?php echo home_url(); ?>/hyperlight/product1/">TFLN Packaged Modulators</a>
                                      <a class="dropdown-item" href="<?php echo home_url(); ?>/hyperlight/product2/">TFLN Modulator PICs</a>
                                      <a class="dropdown-item" href="<?php echo home_url(); ?>/hyperlight/product3/">TFLN Application-specific PICs</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#carrers">Careers </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="<?php echo home_url(); ?>/hyperlight/careers/resources">Resources</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#contact">Contact</a>
                                </li>
                              </ul>                              
                            </div>
                        </nav> 
                    </div>
                </div>               
            </div> 
      </section>
 
 <!-- =======HEADER SECTION========= -->