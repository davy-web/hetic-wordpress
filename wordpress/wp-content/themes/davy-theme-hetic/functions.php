<?php 

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

// Hooks
add_filter( 'upload_mimes', 'capitaine_mime_types' );
add_filter( 'wp_check_filetype_and_ext', 'capitaine_file_types', 10, 4 );

// Autoriser l'import des fichiers SVG et WEBP
function capitaine_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    $mimes['webp'] = 'image/webp';
    return $mimes;
}

// Contrôle de l'import d'un WEBP
function capitaine_file_types( $types, $file, $filename, $mimes ) {
	if ( false !== strpos( $filename, '.webp' ) ) {
    	$types['ext'] = 'webp';
   		$types['type'] = 'image/webp';
	}
	return $types;
}

// Enlever les marges dans l'éditeur Gutenberg
function my_theme_setup() {
  	// Nouveauté à ajouter
  	add_theme_support('editor-styles');
	// Puis la même fonction qu'on utilisait auparavant pour Tiny MCE
	add_editor_style( 'style-editor.css' );
  	// Éventuellement pour prendre en compte les blocs larges
  	add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

/* Hetic */
add_theme_support('title-tag');