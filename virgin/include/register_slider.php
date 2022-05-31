<?php
/*REGISTER POST TYPE*/
function slider() {
	$labels_evenement = array(
		'name'					=>	'Slider',
		'singular_name'			=>	'Slider',
		'menu_name'				=>	'Slider',
		'add_new_item'			=>	'Ajouter un slider',
		'add_new' 				=>	'Ajouter un nouveau slider',
		'new_item'				=>	'Nouveau slider',
		'edit_item'				=>	'Editer un slider',
		'view_item'				=>	'Voir un slider',
		'all_items'				=>	'Tous les sliders',
		'search_items'			=>	'Rechercher un slider',
		'not_found'				=>	'Slider introuvable',
		'not_found_in_trash'	=>	'Introuvable dans la corbeille'
	);

	$parametres_events = array(
		'labels'             	=> $labels_evenement,
		'public'             	=> true,
		'publicly_queryable' 	=> true,
		'show_ui'            	=> true,
		'show_in_menu'       	=> true,
		'query_var'          	=> true,
		'rewrite'            	=> array('slug' => 'slider'),
		'capability_type'    	=> 'post',
		'has_archive'        	=> true,
		'hierarchical'       	=> true,
		'show_in_rest'			=> true,
		'menu_position'      	=> 21,
		'menu_icon' 			=> 'dashicons-slides',
		'supports'           	=> array('title')
	);

	register_post_type('slider',$parametres_events);
}
add_action('init','slider');