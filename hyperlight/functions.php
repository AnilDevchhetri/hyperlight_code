<?php 
add_theme_support('post-thumbnails');
 add_action( 'wp_enqueue_scripts', 'style_script_files' );
function style_script_files()
 {
 	// Enqueue Theme style
   wp_enqueue_style( 'hyper-googgle-font', get_template_directory_uri() . '/css/google_fonts.css',false,'','all');
   wp_enqueue_style( 'hyper-bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css',false,'','all');
   wp_enqueue_style( 'hyper-animation', get_template_directory_uri() . '/css/animation.css',false,'','all');
   wp_enqueue_style( 'hyper-all-min-css', get_template_directory_uri() . '/css/all.min.css',false,'','all');
   wp_enqueue_style( 'hyper-owl-carousel-min', get_template_directory_uri() . '/css/owl.carousel.min.css',false,'','all');
   wp_enqueue_style( 'hyper-main-stylesheet', get_template_directory_uri() . '/css/style.css',false,'','all');
   wp_enqueue_style( 'hyper-main-response', get_template_directory_uri() . '/css/responsive.css',false,'','all');


   //enqueu script

   wp_enqueue_script( 'hyper-module', get_template_directory_uri() . '/js/ionicons.esm.js',array('jquery') ,'' , true);
   wp_enqueue_script( 'hyper-ionicons', get_template_directory_uri() . '/js/ionicons.js',array('jquery') ,'' , true);
   wp_enqueue_script( 'hyper-jquery-3.3.1.min', get_template_directory_uri() . '/js/jquery-3.3.1.min.js',array('jquery') ,'' , true);
   wp_enqueue_script( 'hyper-bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery') ,'' , true);
   wp_enqueue_script( 'hyper-owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js',array('jquery') ,'' , true);
   wp_enqueue_script( 'hyper-script-main', get_template_directory_uri() . '/js/script.js',array('jquery') ,'' , true);
   wp_enqueue_script( 'hyper-scroll', get_template_directory_uri() . '/js/scroll.js',array('jquery') ,'' , true);
   
 }


function favicon4admin() {
echo '<link rel="Shortcut Icon" type="image/x-icon" href="' . get_bloginfo('wpurl') . '/wp-content/favicon.ico" />';
}
add_action( 'admin_head', 'favicon4admin' );

require_once(TEMPLATEPATH . '/custom-post/products.php');
require_once(TEMPLATEPATH . '/fun/customizer.php');
require_once(TEMPLATEPATH. '/fun/custom_metabox.php');
// require_once(TEMPLATEPATH. '/fun/pine-price/admin_menu.php');

    ////////Code for logo start///////////////////
    add_theme_support( 'custom-logo', array(
  'height'      => 200,
  'width'       => 200,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description' ),
  ) );
  ////////Code for logo end///////////////////  
function get_custom_logo_url()
{
    $custom_logo_id = get_theme_mod( 'custom-logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    return $image[0];
}

function custom_trim_content($content) {
    // Remove HTML tags from the content
    $text = strip_tags($content);
    
    // Trim the content to 200 words
    $trimmed_content = wp_trim_words($text, 25, '');

    return $trimmed_content;
}
add_filter('the_content', 'custom_trim_content');


function custom_pagination_link(){

    $args = [
      'before_page_number' =>'<span class="btn border border-secondary">',
      'after_page_number'=>'</span>'
    ];

    $allow_tags = [
        'ul'=>[
          'class'=>[]
        ],
        'a'=>[
         'class'=>[],
         'href'=>[]
        ]
    ];


    printf("<nav aria-label='Page navigation example text-center'>%s</nav>",wp_kses(paginate_links($args),$allow_tags));
}



// add_action('wp_ajax_load_posts', 'load_posts');
// add_action('wp_ajax_nopriv_load_posts', 'load_posts');

// function load_posts() {
//     check_ajax_referer('load_more_posts', 'security');

//     $args = array(
//         'post_type' => 'post',
//         'posts_per_page' => 3, // Number of posts per page
//         'paged' => $_POST['page']
//     );

//     $query = new WP_Query($args);

//     if ($query->have_posts()) :
//         while ($query->have_posts()) :
//             $query->the_post();
//              the_title();
//              the_content();
//         endwhile;
//         wp_reset_postdata();
//     endif;

//     die();
// }
