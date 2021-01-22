<?php
add_action('customize_register', 'adsense_customize_register') ;

function adsense_customize_register($wp_customize) {

  $wp_customize->add_section('mow_ads_section', array(
    'title'     => 'Anzeigen-Verwaltung',
    'priority'  => '30'
  ));


  $wp_customize->add_setting('mow_ads_inarticle', array(
    'default' => '',
  ));
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'mow_ads_inarticle_input',
      array(
        'label'     => 'In-Article',
        'section'   => 'mow_ads_section',
        'settings'  => 'mow_ads_inarticle',
        'type'      => 'textarea'
      )
      )
  );

  $wp_customize->add_setting('mow_ads_global_head', array(
    'default' => '',
  ));
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'mow_ads_global_head_input',
      array(
        'label'     => 'Global-Head-Scripts',
        'section'   => 'mow_ads_section',
        'settings'  => 'mow_ads_global_head',
        'type'      => 'textarea'
      )
      )
  );

  $wp_customize->add_setting('mow_ads_responstive', array(
    'default' => '',
  ));
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'mow_ads_responstive_input',
      array(
        'label'     => 'Responsive',
        'section'   => 'mow_ads_section',
        'settings'  => 'mow_ads_responstive',
        'type'      => 'textarea'
      )
      )
  );





 /*


  $wp_customize->add_setting('mow_ads_topbillboard', array(
    'default' => '',
  ));
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'mow_ads_topbillboard_input',
      array(
        'label'     => 'Top Billboard',
        'section'   => 'mow_ads_section',
        'settings'  => 'mow_ads_topbillboard',
        'type'      => 'textarea'
      )
      )
  );

    $wp_customize->add_setting('mow_ads_topleaderboard', array(
    'default' => '',
  ));
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'mow_ads_topleaderboard_input',
      array(
        'label'     => 'Top Leaderboard',
        'section'   => 'mow_ads_section',
        'settings'  => 'mow_ads_topleaderboard',
        'type'      => 'textarea'
      )
      )
  );




  $wp_customize->add_setting('mow_ads_stickyfooter', array(
    'default' => '',
  ));
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'mow_ads_stickyfooter_input',
      array(
        'label'     => 'stickyfooter',
        'section'   => 'mow_ads_section',
        'settings'  => 'mow_ads_stickyfooter',
        'type'      => 'textarea'
      )
      )
  );*/

}

 ?>
