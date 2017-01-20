<?php
	// make some widgets for the dashbaord apperance 
	if(function_exists('register_sidebar'))
		register_sidebar(array(
			
			'name'			 => 'sidebar1',
			'before_widget'  => '<div class="side-nav-bar">',
			'after_widget' 	 => '</div>',
			'before_title'   => '<h4 class="hide-title">',
			'after_title'    => '</h4>'
		));

	// remove the text editor for the home page
	add_action( 'admin_init', 'hide_editor' );

	function hide_editor() {

		// Get the Post ID.
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		if( !isset( $post_id ) ) return;

		$homepgname = get_the_title($post_id);
			if($homepgname == 'Home'){ 
			remove_post_type_support('page', 'editor');
		}
	}

