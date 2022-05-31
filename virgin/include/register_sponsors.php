<?php
/*REGISTER POST TYPE*/
function sponsors() {
	$labels_evenement = array(
		'name'					=>	'Sponsors',
		'singular_name'			=>	'Sponsor',
		'menu_name'				=>	'Sponsors',
		'add_new_item'			=>	'Ajouter un sponsor',
		'add_new' 				=>	'Ajouter un nouveau sponsor',
		'new_item'				=>	'Nouveau sponsor',
		'edit_item'				=>	'Editer un sponsor',
		'view_item'				=>	'Voir un sponsor',
		'all_items'				=>	'Tous les sponsors',
		'search_items'			=>	'Rechercher un sponsor',
		'not_found'				=>	'Sponsor introuvable',
		'not_found_in_trash'	=>	'Introuvable dans la corbeille'
	);

	$parametres_events = array(
		'labels'             	=> $labels_evenement,
		'public'             	=> true,
		'publicly_queryable' 	=> true,
		'show_ui'            	=> true,
		'show_in_menu'       	=> true,
		'query_var'          	=> true,
		'rewrite'            	=> array('slug' => 'sponsor'),
		'capability_type'    	=> 'post',
		'taxonomies'  			=> array('category'),
		'has_archive'        	=> true,
		'hierarchical'       	=> true,
		'show_in_rest'			=> true,
		'menu_position'      	=> 21,
		'menu_icon' 			=> 'dashicons-spotify',
		'supports'           	=> array('title','thumbnail',"editor")
	);
	register_post_type('sponsors',$parametres_events);
}
add_action('init','sponsors');