<?php

register_taxonomy('color', array(
	0 => 'products',
), array(
	'label' => 'Farbe',
	'description' => '',
	'hierarchical' => false,
	'post_types' => array(
		0 => 'products',
	),
	'public' => true,
	'publicly_queryable' => true,
	'update_count_callback' => '',
	'sort' => false,
	'labels' => array(
	),
	'show_ui' => true,
	'show_in_menu' => true,
	'show_in_nav_menus' => true,
	'show_tagcloud' => true,
	'show_in_quick_edit' => true,
	'show_admin_column' => true,
	'rewrite' => true,
	'show_in_rest' => false,
	'rest_base' => '',
	'rest_controller_class' => 'WP_REST_Terms_Controller',
	'acfe_single_template' => '',
	'acfe_single_ppp' => 10,
	'acfe_single_orderby' => 'date',
	'acfe_single_order' => 'DESC',
	'acfe_admin_ppp' => 10,
	'acfe_admin_orderby' => 'name',
	'acfe_admin_order' => 'ASC',
	'capabilities' => array(
	),
	'meta_box_cb' => NULL,
));

register_taxonomy('material', array(
	0 => 'products',
), array(
	'label' => 'Material',
	'description' => '',
	'hierarchical' => false,
	'post_types' => array(
		0 => 'products',
	),
	'public' => true,
	'publicly_queryable' => true,
	'update_count_callback' => '',
	'sort' => false,
	'labels' => array(
	),
	'show_ui' => true,
	'show_in_menu' => true,
	'show_in_nav_menus' => true,
	'show_tagcloud' => true,
	'show_in_quick_edit' => true,
	'show_admin_column' => true,
	'rewrite' => true,
	'show_in_rest' => false,
	'rest_base' => '',
	'rest_controller_class' => 'WP_REST_Terms_Controller',
	'acfe_single_template' => '',
	'acfe_single_ppp' => 10,
	'acfe_single_orderby' => 'date',
	'acfe_single_order' => 'DESC',
	'acfe_admin_ppp' => 10,
	'acfe_admin_orderby' => 'name',
	'acfe_admin_order' => 'ASC',
	'capabilities' => array(
	),
	'meta_box_cb' => NULL,
));

register_taxonomy('product_attributes', array(
	0 => 'products',
), array(
	'label' => 'Produkt-Eigenschaften',
	'description' => '',
	'hierarchical' => false,
	'post_types' => array(
		0 => 'products',
	),
	'public' => true,
	'publicly_queryable' => true,
	'update_count_callback' => '',
	'sort' => false,
	'labels' => array(
	),
	'show_ui' => true,
	'show_in_menu' => true,
	'show_in_nav_menus' => true,
	'show_tagcloud' => true,
	'show_in_quick_edit' => true,
	'show_admin_column' => true,
	'rewrite' => true,
	'show_in_rest' => false,
	'rest_base' => '',
	'rest_controller_class' => 'WP_REST_Terms_Controller',
	'acfe_single_template' => '',
	'acfe_single_ppp' => 10,
	'acfe_single_orderby' => 'date',
	'acfe_single_order' => 'DESC',
	'acfe_admin_ppp' => 10,
	'acfe_admin_orderby' => 'name',
	'acfe_admin_order' => 'ASC',
	'capabilities' => array(
	),
	'meta_box_cb' => NULL,
));

register_taxonomy('product_category', array(
	0 => 'products',
), array(
	'label' => 'Produkt-Kategorie',
	'description' => '',
	'hierarchical' => false,
	'post_types' => array(
		0 => 'products',
	),
	'public' => true,
	'publicly_queryable' => true,
	'update_count_callback' => '',
	'sort' => false,
	'labels' => array(
	),
	'show_ui' => true,
	'show_in_menu' => true,
	'show_in_nav_menus' => true,
	'show_tagcloud' => true,
	'show_in_quick_edit' => true,
	'show_admin_column' => true,
	'rewrite' => true,
	'show_in_rest' => false,
	'rest_base' => '',
	'rest_controller_class' => 'WP_REST_Terms_Controller',
	'acfe_single_template' => '',
	'acfe_single_ppp' => 10,
	'acfe_single_orderby' => 'date',
	'acfe_single_order' => 'DESC',
	'acfe_admin_ppp' => 10,
	'acfe_admin_orderby' => 'name',
	'acfe_admin_order' => 'ASC',
	'capabilities' => array(
	),
	'meta_box_cb' => NULL,
));
