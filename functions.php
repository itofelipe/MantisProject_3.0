<?php 
	function mantis_project_style() {
		wp_register_style( 'bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
		wp_enqueue_style('bootstrap_css');
		wp_register_style( 'owl_css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
		wp_enqueue_style('owl_css');
		wp_register_style( 'Font_Awesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css' );
		wp_enqueue_style('Font_Awesome');
		wp_register_style( 'Animate_css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
		wp_enqueue_style('Animate_css');
		wp_register_style( 'aos_css', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
		wp_enqueue_style('aos_css');
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );
		wp_enqueue_style( 'scroll_nav', get_template_directory_uri() . '/assets/css/scroll_nav.css' );
		wp_enqueue_style( 'mobile', get_template_directory_uri() . '/assets/css/mobile.css' );
	}
	add_action( 'wp_enqueue_scripts', 'mantis_project_style' );


	function mantis_project_query() {
		wp_register_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', null, null, true );
		wp_enqueue_script('jQuery');
		wp_register_script( 'owl_js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', null, null, true );
		wp_enqueue_script('owl_js');
		wp_register_script( 'bootstrap_bundle_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', null, null, true );
		wp_enqueue_script('bootstrap_bundle_js');
		wp_register_script( 'aos_js', 'https://unpkg.com/aos@next/dist/aos.js', null, null, true );
		wp_enqueue_script('aos_js');
		wp_enqueue_script( 'aos_local_js', get_template_directory_uri() . '/assets/js/aos_init.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'owl_loop', get_template_directory_uri() . '/assets/js/owl.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'scroll_nav', get_template_directory_uri() . '/assets/js/scroll_nav.js', array ( 'jquery' ), 1.1, true);
	}
	add_action( 'wp_enqueue_scripts', 'mantis_project_query' );
?>