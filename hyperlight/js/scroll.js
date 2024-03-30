

$("#carouselExampleControls").carousel({ interval: 5000}); // this prevents the auto-loop
    var videos = document.querySelectorAll("video.home-slide-video");
    
    videos.forEach(function(e) {
      e.addEventListener('ended', myHandler,false);
    }); 

    function myHandler(e) {
console.log("hello finish");
        $("#carouselExampleControls").carousel('next');
    }



 //scroll//////////////////////////////
   $('a[href^="#mainsec"]').on('click', function(event) {
                    var target = $(this.getAttribute('href'));
                    if( target.length ) {
                        event.preventDefault();
                        $('html, body').stop().animate({
                            scrollTop: (target.offset().top - 0)
                        }, 1000);
                    }
                }); 


                $('a[href^="#about"]').on('click', function(event) {
                    var target = $(this.getAttribute('href'));
                    if( target.length ) {
                        event.preventDefault();
                        $('html, body').stop().animate({
                            scrollTop: (target.offset().top - 0)
                        }, 1000);
                    }
                });


                $('a[href^="#team"]').on('click', function(event) {
                    var target = $(this.getAttribute('href'));
                    if( target.length ) {
                        event.preventDefault();
                        $('html, body').stop().animate({
                            scrollTop: (target.offset().top - 0)
                        }, 1000);
                    }
                }); 

                $('a[href^="#product"]').on('click', function(event) {
                    var target = $(this.getAttribute('href'));
                    if( target.length ) {
                        event.preventDefault();
                        $('html, body').stop().animate({
                            scrollTop: (target.offset().top - 0)
                        }, 1000);
                    }
                }); 

                // $('a[href^="#resources"]').on('click', function(event) {
                //     var target = $(this.getAttribute('href'));
                //     if( target.length ) {
                //         event.preventDefault();
                //         $('html, body').stop().animate({
                //             scrollTop: (target.offset().top - 0)
                //         }, 1000);
                //     }
                // }); 
                $('a[href^="#carrers"]').on('click', function(event) {
                    var target = $(this.getAttribute('href'));
                    if( target.length ) {
                        event.preventDefault();
                        $('html, body').stop().animate({
                            scrollTop: (target.offset().top - 0)
                        }, 1000);
                    }
                }); 

                $('a[href^="#our_partners"]').on('click', function(event) {
                    var target = $(this.getAttribute('href'));
                    if( target.length ) {
                        event.preventDefault();
                        $('html, body').stop().animate({
                            scrollTop: (target.offset().top - 0)
                        }, 1000);
                    }
                }); 

                $('a[href^="#contact"]').on('click', function(event) {
                    var target = $(this.getAttribute('href'));
                    if( target.length ) {
                        event.preventDefault();
                        $('html, body').stop().animate({
                            scrollTop: (target.offset().top - 0)
                        }, 1000);
                    }
                }); 
         
         
                  $('.navbar-nav .nav-link').click(function(){
                   $('.navbar-nav .nav-link').removeClass('active');
                   $(this).addClass('active');
               })
             $('.carousel').carousel({
                  interval: 25000
                 })   
 //scrooll////////////////////////////