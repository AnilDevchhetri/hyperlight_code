<!-- =======FOOTER SECTION========= -->  
             
                <section class="contact-sec" id="contact">                   
                <div class="container custom-container" >
                    <div class="row"> 
                    <!-- <div id="particles-js"></div> -->
                        <div class="col-md-12">
                           <div class="title-contact pb-5 r-pd-none">
                              <h2><?php echo get_theme_mod('hp-footer-shortdec-one'); ?></h2>
                              <p><?php echo get_theme_mod('hp-footer-shortdec-two'); ?></p>
                              </div> 
                        </div>
                        <div class="col-md-6">
                            <ul class="contact-info-list pt-5">
                              
                                <li>
                                  <span class="fas fa-phone"></span><!-- <b>Phone </b> --><a href="#"><?php echo get_theme_mod('hp-footer-phone-number'); ?></a></li>
                                <li>
                                <span class="fas fa-envelope-open"></span><!-- <b>Email</b> --><a href="#"><?php echo get_theme_mod('hp-footer-email'); ?></a>
                              </li>
                              <li>
                                <span class="fas fa-map-marker-alt"></span><!-- <b>Address</b> -->
                                <a href="#"><?php echo get_theme_mod('hp-footer-location'); ?></a></li>
                                <li><span class="fa-solid fa-map-location-dot"></span>
                                    <a href="<?php echo get_theme_mod('hp-footer-google-map'); ?>" target="_blank">Click here to navigate</a>
                                </li>
                            </ul>      
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form-box pt-5">
                                <div class="contact-form">
                                    <?php  echo do_shortcode('[contact-form-7 id="20" title="Footer Contact form"]'); ?>
                                </div>
                            </div>
                         </div>
                        <!-- <div class="col-md-4">
                            <div class="location pt-5">
                             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2947.983552088214!2d-71.1016112!3d42.3641898!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e377547437dce3%3A0xd7e7c8476a774ac0!2s501%20Massachusetts%20Ave%2C%20Cambridge%2C%20MA%2002139%2C%20USA!5e0!3m2!1sen!2snp!4v1629928424532!5m2!1sen!2snp" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>  -->                                
                    </div>
                     <!-- <div class="tri-color-line"></div> -->
                   
                    
                </section>
                
            <!-- =======FOOTER SECTION========= -->    

        <footer class="footer">
            <div class="waves">
              <div class="wave" id="wave1"></div>
              <div class="wave" id="wave2"></div>
              <div class="wave" id="wave3"></div>
              <div class="wave" id="wave4"></div>
            </div>

               <div class="row">
                <div class="col-md-4">
                    <div class="social_links">
                                    <ul>
                                        <li><a href="<?php echo get_theme_mod('hp-footer-twitter'); ?>"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?php echo get_theme_mod('hp-footer-linkedin'); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                            </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-logo margin-auto">
                                <a href="<?php echo home_url(); ?>">
                                  <!-- <img src="<?php //bloginfo('template_url'); ?>/img/logo.png"> -->
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
                                </a>
                            </div>
                </div>
                <div class="col-md-4">
                    <div class="copyright">
                                    <span class=""><?php echo get_theme_mod('hp-footer-rights'); ?></span>
                                </div>
                </div>
               </div>
        </footer>

               
 <?php wp_footer();?>
</body>
</html>