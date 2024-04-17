<?php

/* Enqueue Scripts Here
-------------------------------------------------------------- */

function theme_name_scripts() {

	wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
  wp_enqueue_script( 'jquery' );
	
	//wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
	// wp_enqueue_script( 'wistia-1', 'https://fast.wistia.com/embed/medias/wzq96iioj4.jsonp', array( 'jquery' ), '', true );
	// wp_enqueue_script( 'wistia-2', 'https://fast.wistia.com/assets/external/E-v1.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'modernizer', get_template_directory_uri() . '/js/modernizr-custom.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'slick-carousel', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'scrollmagic', get_template_directory_uri() . '/js/ScrollMagic.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'gsap-animations', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/animation.gsap.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'scrollmagic-debug', get_template_directory_uri() . '/js/debug.addIndicators.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'lity', get_template_directory_uri() . '/js/lity.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'lazy-load', get_template_directory_uri() . '/js/jquery.lazy.min.js', array( 'jquery' ), '', true );
 	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', 
 	array( 'jquery',
 		     'slick-carousel',
 		     'modernizer',
 		     'scrollmagic',
 		     'gsap',
 		     'gsap-animations',
 		     'scrollmagic-debug',
 		    //  'wistia-1',
			//  'wistia-2',
             'lity',
 		     'lazy-load' ), '', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

/* Register Nav-Menus
-------------------------------------------------------------- */

register_nav_menus( array(
	'main_menu' => 'Main Menu',
	'sidebar_menu' => 'Sidebar Menu',
) );

/* No Tab Conflicts Gravity Forms
-------------------------------------------------------------- */

// add_filter( 'gform_tabindex', 'gform_tabindexer', 10, 2 );
// function gform_tabindexer( $tab_index, $form = false ) {
//     $starting_index = 1000;
//     if( $form )
//         add_filter( 'gform_tabindex_' . $form['id'], 'gform_tabindexer' );
//     return GFCommon::$tab_index >= $starting_index ? GFCommon::$tab_index : $starting_index;
//     }
    
/* Place Gravity Form Scripts in the footer
-------------------------------------------------------------- */

// add_filter( 'gform_init_scripts_footer', '__return_true' );
// add_filter( 'gform_cdata_open', 'wrap_gform_cdata_open', 1 );
// function wrap_gform_cdata_open( $content = '' ) {
// if ( ( defined('DOING_AJAX') && DOING_AJAX ) || isset( $_POST['gform_ajax'] ) ) {
// return $content;
// }
// $content = 'document.addEventListener( "DOMContentLoaded", function() { ';
// return $content;
// }
// add_filter( 'gform_cdata_close', 'wrap_gform_cdata_close', 99 );
// function wrap_gform_cdata_close( $content = '' ) {
// if ( ( defined('DOING_AJAX') && DOING_AJAX ) || isset( $_POST['gform_ajax'] ) ) {
// return $content;
// }
// $content = ' }, false );';
// return $content;
// }

/* Dynamic Sidebars
-------------------------------------------------------------- */

if(function_exists('register_sidebars')){
	
	register_sidebar(array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>'
	));
	
	register_sidebar(array(
		'name'          => 'Blog Sidebar',
		'id'            => 'blog_sidebar',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>'
	));
}

/* Add Theme Support Page Thumbnails
-------------------------------------------------------------- */

add_theme_support( 'post-thumbnails' );

/* Modify the_excerpt() " read more "
-------------------------------------------------------------- */

function new_excerpt_more($more) {
   global $post;
   return '... <a class="read-more" href="'. get_permalink($post->ID) . '">' . '' . '</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');

/* Add ACF Options Page
-------------------------------------------------------------- */

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Firm Info',
		'menu_title'	=> 'Firm Info',
		'menu_slug' 	=> 'firm_info',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> '3rd Party Scripts',
		'menu_title'	=> '3rd Party Scripts',
		'menu_slug' 	=> '3rd_party_scripts',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

/* CPT
-------------------------------------------------------------- */

// Create custom post type
function create_post_type() {
    register_post_type( 'Results',
        array(
            'labels' => array(
                'name' => __( 'Results' ),
                'singular_name' => __( 'Results' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'results','with_front' => false),
            'taxonomies' => array('post_tag'),			
        )
    );
    register_post_type( 'Videos',
        array(
            'labels' => array(
                'name' => __( 'Videos' ),
                'singular_name' => __( 'Video' )
            ),
            'public' => false,
  	    'publicly_queryable' => true,
            'show_ui' => true,
	    'exclude_from_search' => true,
	    'show_in_nav_menus' => false,	
            'has_archive' => false,
            'rewrite' => false,
            'taxonomies' => array('post_tag')
        )
    );
}
add_action( 'init', 'create_post_type' );

//Create category for specific post type
function create_taxonomy() {
    register_taxonomy(
        'results-categories',
        'results',
        array(
            'label' => __( 'Result Categories' ),
            'rewrite' => array( 'slug' => 'results-categories' ),
            'hierarchical' => true,
            'has_archive' => true
        )
    );
    register_taxonomy(
        'videos-categories',
        'videos',
        array(
            'label' => __( 'Video Categories' ),
            'rewrite' => array( 'slug' => 'videos-categories' ),
            'hierarchical' => true,
            'has_archive' => false
        )
    );
}
add_action( 'init', 'create_taxonomy' );


function sidebar_video(){
    ob_start(); 

    if(is_page(2875) || is_page(2878)) { ?>

    <div class="vid-cont">
   <video width="400" controls preload="none" poster="https://www.horwitzlaw.com/wp-content/uploads/2022/01/thumb-1.png" style="object-fit:cover;">
      <source src="https://www.horwitzlaw.com/wp-content/uploads/2022/01/Horwitz-TV-Cliff-Wins-5-with-scroll.mp4" type="video/mp4">
    </video>
    </div>

<?php }
	if(is_page(2297)) { ?>
		 <div class="vid-cont">
   <video width="400" controls >
      <source src="https://www.horwitzlaw.com/wp-content/uploads/2022/01/Horwitz-TV-Bayer-Scroll.mp4#t=0.1" type="video/mp4">
    </video>
    </div>

	<?php } if(is_page(322296)) { ?>
		 <div class="vid-cont">
   <video width="400" controls >
      <source src="https://www.horwitzlaw.com/wp-content/uploads/2022/01/Horwitz-TV-Gun-Fight.mp4#t=0.1" type="video/mp4">
    </video>
    </div>

	<?php } if(is_page(2640)) { ?>
		 <div class="vid-cont">
   <video width="400" controls >
      <source src="https://www.horwitzlaw.com/wp-content/uploads/2022/01/Horwitz-TV-Tony.mp4#t=0.1" type="video/mp4">
    </video>
    </div>

	<?php } if(is_page(325055)) { ?>
		 <div class="vid-cont">
   <video width="400" controls >
      <source src="https://www.horwitzlaw.com/wp-content/uploads/2022/01/Horwitz-TV-Grandfather.mp4#t=0.1" type="video/mp4">
    </video>
    </div>

	<?php } if(is_page(2889)) { ?>
		 <div class="vid-cont">
   <video width="400" controls >
      <source src="https://www.horwitzlaw.com/wp-content/uploads/2023/05/Horwitz-TV-Harm.mp4#t=0.1" type="video/mp4">
    </video>
    </div>

	<?php }
	
   $output = ob_get_contents();
    ob_end_clean();
    
    return $output;
}

add_shortcode( 'show-video', 'sidebar_video' );


add_action( 'init', 'create_news_post_type' );
 
function create_news_post_type() {
 
$args = array(
  'labels' => array(
   'name' => __( 'News' ),
   'singular_name' => __( 'News' )
  ),
  'public' => true,
  'has_archive' => true,
   'rewrite' => array('slug' => 'news','with_front' => true),
 );
 
register_post_type( 'news',$args);
}
add_post_type_support( 'news', 'thumbnail' );

function news_taxonomy() {

    register_taxonomy(
        'news-categories',
        'news',
        array(
            'label' => __( 'News Categories' ),
            'rewrite' => array( 'slug' => 'news-categories' ),
            'hierarchical' => true,
            'has_archive' => true
        )
    );
}
add_action( 'init', 'news_taxonomy' );

add_filter('wpseo_sitemap_entry', 'my_sitemap_priority', 10, 3);
function my_sitemap_priority($post, $type, $url) {
    $uri_segments='';
    $uri_segments = explode('/', $post['loc']);
    $newlogc = $post;
    // tag sitemap
    if ($uri_segments[3] == 'news') {
        // replace these with your logic
        $newlogc['chf'] = 'daily';
        $newlogc['pri'] = 0.5;
          //print_r($type);
            //echo "<br>here";
           //print_r($newlogc);exit();
    }
    return $newlogc;
}

add_action( 'init', 'create_faq_post_type' );
 
function create_faq_post_type() {
 
$args = array(
  'labels' => array(
   'name' => __( 'FAQs' ),
   'singular_name' => __( 'Faq' )
  ),
  'public' => true,
  'has_archive' => true,
   'rewrite' => array('slug' => 'faqs','with_front' => true),
 );
 
register_post_type( 'faqs',$args);
}
add_post_type_support( 'faqs', 'thumbnail' );

function faqs_taxonomy() {

    register_taxonomy(
        'faq-categories',
        'faqs',
        array(
            'label' => __( 'Category' ),
            'rewrite' => array( 'slug' => 'faq' ),
            'hierarchical' => true,
            'has_archive' => true,
			'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
        )
    );
}
add_action( 'init', 'faqs_taxonomy' );	

add_action( 'widgets_init', 'faq_register_sidebar' );

function faq_register_sidebar(){
 register_sidebar(array(
 'name' => 'FAQ sidebar',
 'id' => 'faq_sidebar',
 'description' => 'My sidebar description',
 'before_widget' => '<div id="%1$s" class="widget %2$s">',
 'after_widget'  => '</div>',
 'before_title' => '<h3 class="widgettitle">',
 'after_title' => '</h3>',
 ));
}

add_shortcode('show-faq-cat', 'faq_cat');
function faq_cat(){
	 ob_start(); 
  $categories = get_terms( 'faq-categories', array(
                    'hide_empty' => false,
                ) );
              
     foreach($categories as $key => $category){
    $term_meta = get_option( "faq-categories_$category->term_id" );  ?>
    <ul>
 <li> <a href="<?php echo get_term_link($category->slug, 'faq-categories');?>"><?php echo $category->name;?></a>  </li>
 </ul>
   <?php
        }
	  $out = ob_get_contents();
    ob_end_clean();
    
    return $out;
      }


function new_video_slider()
{
    ob_start(); 
    if( have_rows('testimonial') ):

?>
<div class="new-video-sect testimonial-mainn"> 
  <?php  while ( have_rows('testimonial') ) : the_row(); ?>
    <div class="testimonial-wrp">
          <div class="testimonial-wrp-inner">
            <div class="testimonial-single">
             <p class="content"><?php the_sub_field('testimonials_text'); ?></p>
            <p class="client_name"><?php the_sub_field('client_name'); ?></p>
            </div>
       
        </div>
      </div>
      <?php endwhile; ?>
  </div>

<?php
   endif; 
    $output = ob_get_contents();

        ob_end_clean();
        return $output;
}
add_shortcode('testmonial-slider', 'new_video_slider');