<?php 

// Aqui van todas mis funcionalidades adicionales del template

function cargar_estilos(){
	// Que estilos se van a cargar
	wp_enqueue_style("bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css");
	wp_enqueue_style("styles", get_template_directory_uri() . "/style.css", 
		null, "1.2");
}

add_action("wp_enqueue_scripts", "cargar_estilos");