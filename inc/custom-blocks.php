<?php

add_action('acf/init', 'my_acf_blocks');
function my_acf_blocks() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {


        acf_register_block_type(
          array(
            'name'              => 'product_recommendation',
            'title'             => __('Produktempfehlung'),
            'render_template'   => 'blocks/product_recommendation.php',
            'category'          => 'eigene',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'produkt', 'empfehlung', 'link'),
            'mode'              => 'edit',
        )
      );
        acf_register_block_type(
          array(
            'name'              => 'top3_products',
            'title'             => __('Top3 Produkte'),
            'render_template'   => 'blocks/top3_products.php',
            'category'          => 'eigene',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'produkt', 'empfehlung', 'link'),
            'mode'              => 'edit',
        )
      );
      acf_register_block_type(
        array(
          'name'              => 'post_grid',
          'title'             => __('Post Grid'),
          'render_template'   => 'blocks/post_grid.php',
          'category'          => 'eigene',
          'icon'              => 'admin-comments',
          'keywords'          => array( 'post', 'grid', 'link'),
          'mode'              => 'edit',
      )
    );
    }
}


if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5ffae3723514b',
	'title' => 'product_recommendation',
	'fields' => array(
    array(
			'key' => 'field_ax88k32js9',
			'label' => 'Produkte',
			'name' => 'products',
			'type' => 'repeater',
      'layout' => 'row',
      'sub_fields' => array(
        array(
          'key' => 'field_5ffd8fea0a81a',
					'label' => 'Kategorie',
					'name' => 'category',
					'type' => 'text',
        ),
        array(
          'key' => 'field_5ffd90000a81b',
					'label' => 'product',
					'name' => 'product',
					'type' => 'post_object',
          'allow_null' => 1,
          'post_type' => array(
    				0 => 'products',
    			),
        ),
        array(
          'key' => 'field_product_recommendation_products_asin',
					'label' => 'Spezielle ASIN',
					'name' => 'asin',
					'type' => 'text',
        ),
        array(
          'key' => 'field_5ffd903d0a81c',
					'label' => 'Beschreibung',
					'name' => 'description',
					'type' => 'wysiwyg',
          'tabs' => 'visual',
					'toolbar' => 'basic',
					'media_upload' => 0,
        ),
        array(
          'key' => 'field_5ffd90000a81c',
					'label' => 'Spezieller Vergleich',
					'name' => 'comparison',
					'type' => 'post_object',
          'allow_null' => 1,
          'post_type' => array(
    				0 => 'comparison',
    			),
        ),
      )
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/product-recommendation',
			),
		),
	),

));

acf_add_local_field_group(array(
	'key' => 'group_m239uwfu923',
	'title' => 'top3_products',
	'fields' => array(
    array(
			'key' => 'field_top3_products',
			'label' => 'Produkte',
			'name' => 'products',
			'type' => 'repeater',
      'layout' => 'row',
      'min' => 3,
			'max' => 3,
      'sub_fields' => array(

        array(
          'key' => 'field_top3_products_product',
          'label' => 'product',
          'name' => 'product',
          'type' => 'post_object',
          'allow_null' => 1,
          'post_type' => array(
            0 => 'products',
          ),
          'wrapper' => array(
						'width' => '50',
					),
        ),
        array(
          'key' => 'field_top3_products_asin',
          'label' => 'Spezielle ASIN',
          'name' => 'asin',
          'type' => 'text',
          'wrapper' => array(
						'width' => '50',
					),
        ),
      ),
  	),
  ),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/top3-products',
			),
		),
	),

));

acf_add_local_field_group(array(
	'key' => 'group_af4r43rcaew',
	'title' => 'post_grid',
	'fields' => array(
      array(
        'key' => 'field_post_grid',
        'label' => 'Posts',
        'name' => 'posts',
        'type' => 'relationship',
      ),
    ),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/post-grid',
			),
		),
	),

));

endif;
