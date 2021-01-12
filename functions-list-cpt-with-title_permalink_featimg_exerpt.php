<?php


function cos_cpt_tax() {
	$taxonomies = get_object_taxonomies( 'kurser_for_ledige', 'objects' );

	foreach( $taxonomies as $taxonomy ){
		echo $taxonomy->name;
		// echo $taxonomy->slug;

		$terms = get_terms(array(
			'taxonomy' => $taxonomy->name,
			// 'slug' => $taxonomy->slug,
			'hide_empty' => false,
		));

		foreach( $terms as $term ){
			// echo "<li><a href="{$term->slug}">{$term->name}</a></li>";
			echo "<li>{$term->name}</li>";
		}
	}

}
add_shortcode('cptcat', 'cos_cpt_tax'); 
 