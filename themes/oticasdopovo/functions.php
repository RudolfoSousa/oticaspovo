<?php

// Remover link RSD
remove_action ('wp_head', 'rsd_link');

// Remove a versão do WordPress do cabeçalho
remove_action('wp_head', 'wp_generator');



// Estilos e scripts
function tutsup_enqueue_scripts () {
	// Versão do nosso tema
	$tutsup_version = '1.0';
	
	// Style.css
	wp_enqueue_style( 'tutsup-style-description', get_stylesheet_uri(), array(), $tutsup_version, 'all' );
	
	// Um arquivo de CSS qualquer dentro da pasta css/
	wp_enqueue_style( 'tutsup-style', get_template_directory_uri() . '/css/main.css', array(), $tutsup_version, 'all' );

	// Um arquivo de script qualquer dentro da pasta js/
	wp_enqueue_script( 'tutsup-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), $tutsup_version, true );

}
// Carrega os estilos e scripts
add_action( 'wp_enqueue_scripts', 'tutsup_enqueue_scripts' );

?>