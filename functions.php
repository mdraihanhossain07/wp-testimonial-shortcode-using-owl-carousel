<?php 


function text_domain_assets(){

	wp_enqueue_script( 'owl-js', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js',
        array( 'jquery' )
    );

    wp_enqueue_script( 'ds-theme-script', get_stylesheet_directory_uri() . '/js/scripts.js',
        array( 'jquery' )
    );

}

add_action( 'wp_enqueue_scripts', 'text_domain_assets' );


/**
 * Testimonials
 */

function shortcode_callback_func_testimonials( $atts = array(), $content = '' ) {

	$args = array( 'post_type' => 'testimonials', 'posts_per_page' =>-1 );
    $loop = new WP_Query( $args );
    $s_content .= '<div class="testimonial-item-area"><div id="testimonial" class="owl-carousel owl-theme">';
    while ( $loop->have_posts() ) : $loop->the_post(); 

    	$s_content .= '<div class="single-testimonial-item">';
    		$s_content .= '<div class="testimonial-item-content">';

    			$s_content .= '<div class="testimonial-img">';
    				$s_content .= '<img src="'.get_field('image').'" alt="'.get_the_title().'">';
				$s_content .= "</div>";

    			$s_content .= '<div class="testimonial-text">';
					$s_content .= get_field('content');
					$s_content .='<h4>'.get_the_title().'<span>'.get_field('destination').'</span></h4>';
				$s_content .='</div>';
				
			$s_content .='</div>';
		$s_content .='</div>';

	endwhile; 

	wp_reset_query(); 
	$s_content .= '</div></div>'; 


	return $s_content;
}
add_shortcode( 'testimonials', 'shortcode_callback_func_testimonials' );