(function ($) {
    $(document).ready(function () {  

        //Scroll totop
        //-----------------------------------------------
        $(window).scroll(function () {
            if ($(this).scrollTop() != 0) {
                $(".scrollToTop").fadeIn();
            } else {
                $(".scrollToTop").fadeOut();
            }
        });

        $(".scrollToTop").click(function () {
            $("body,html").animate({ scrollTop: 0 }, 800);
        });

        // OWL CAROUSEL

              $('.partners').owlCarousel({
                    loop:true,
                    margin:25,
                    responsiveClass:true,
                    nav:true,
                   autoplay: true,
                    slideTransition: 'linear',
                   autoPlaySpeed: 50,
                   autoPlayTimeout: 0,
                   smartSpeed: 2000,
                   // animateIn: 'linear',
                   // animateOut: 'linear',
                   autoHeight:true,
                   navText: [
                            "<i class='fa fa-angle-left'></i>",
                            "<i class='fa fa-angle-right'></i>"
                        ],
                    responsive:{
                        0:{
                            items:1,
                            nav:false,
                            
                        },
                        600:{
                            items:1,

                        },
                        1000:{
                            items:4, 
                                
                             
                        }
                    }
                })
                 
         // END OWL CAROUSEL       

         

         
         //menubar scripts starts here
     var stickyNavTop = $('.nav1').offset().top;

                var stickyNav = function(){
                var scrollTop = $(window).scrollTop();

    if (scrollTop > stickyNavTop) { 
      $('.nav1').addClass('sticky');
       $('.nav1').addClass('fadeInDown animated');
     $(".logosticky").css("width","170px");
    } else {
      $(".logosticky").css("width","170px");
      $('.nav1').removeClass('sticky'); 
      $('.nav1').removeClass('fadeInDown animated');
    }
  };

  stickyNav();

  $(window).scroll(function() {
    stickyNav();
  });
//menubar scripts ends here
// product enquiry tab starts
$('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
// product enquiry tab end

 }); // End document ready

})(this.jQuery);

