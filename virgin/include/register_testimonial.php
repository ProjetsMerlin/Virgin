<?php
/*REGISTER POST TYPE*/
function temoignages() {
	$labels_evenement = array(
		'name'					=>	'Témoignages',
		'singular_name'			=>	'Témoignage',
		'menu_name'				=>	'Témoignages',
		'add_new_item'			=>	'Ajouter un témoignage',
		'add_new' 				=>	'Ajouter un nouveau témoignage',
		'new_item'				=>	'Nouveau témoignage',
		'edit_item'				=>	'Editer un témoignage',
		'view_item'				=>	'Voir un témoignage',
		'all_items'				=>	'Tous les temoignages',
		'search_items'			=>	'Rechercher un témoignage',
		'not_found'				=>	'Témoignage introuvable',
		'not_found_in_trash'	=>	'Introuvable dans la corbeille'
	);

	$parametres_events = array(
		'labels'             	=> $labels_evenement,
		'public'             	=> true,
		'publicly_queryable' 	=> true,
		'show_ui'            	=> true,
		'show_in_menu'       	=> true,
		'query_var'          	=> true,
		'rewrite'            	=> array('slug' => 'temoignage'),
		'capability_type'    	=> 'post',
		'has_archive'        	=> true,
		'hierarchical'       	=> true,
		'show_in_rest'			=> true,
		'menu_position'      	=> 21,
		'menu_icon' 			=> 'dashicons-admin-comments',
		'supports'           	=> array('title','page-attributes','thumbnail',"editor")
	);

	register_post_type('temoignages',$parametres_events);
}
add_action('init','temoignages');