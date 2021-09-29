<?php

if ( function_exists( 'add_action' ) ) {
	add_action( 'plugins_loaded', 'newfold_module_register_{{ module.name | snakeCase }}' );
}

/**
 * Register the {{ module.name | lowercase }} module.
 */
function  newfold_module_register_{{ module.name | snakeCase }}() {
	eig_register_module(
		array(
			'name'     => '{{ module.name | kebabCase }}',
			'label'    => __( '{{ module.name }}', 'endurance' ),
			'callback' => 'newfold_module_load_{{ module.name | snakeCase }}',
			'isActive' => {{ module.isActive }},
			'isHidden' => {{ module.isHidden }},
		)
	);
}

/**
 * Load the {{ module.name  | lowercase }} module.
 */
function newfold_module_load_{{ module.name | snakeCase }}() {
	require dirname( __FILE__ ) . '/{{ module.name | kebabCase }}.php';
}
