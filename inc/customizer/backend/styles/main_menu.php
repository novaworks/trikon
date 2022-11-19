<?php
$sep_id  = 75653;
$section = 'style_main_menu';

Kirki::add_field( 'trikon', array(
    'type'        => 'color',
    'settings'    => 'main_menu_background_color',
    'label'       => esc_html__( 'Background Color', 'trikon' ),
    'section'     => $section,
    'default'     => '#fff',
    'priority'    => 10,

) );

// ---------------------------------------------
Kirki::add_field( 'trikon', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,

) );
// ---------------------------------------------

Kirki::add_field( 'trikon', array(
    'type'        => 'color',
    'settings'    => 'main_menu_font_color',
    'label'       => esc_html__( 'Text Color', 'trikon' ),
    'section'     => $section,
    'default'     => '#777',
    'priority'    => 10,

) );

// ---------------------------------------------
Kirki::add_field( 'trikon', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,

) );
// ---------------------------------------------

Kirki::add_field( 'trikon', array(
    'type'        => 'color',
    'settings'    => 'main_menu_accent_color',
    'label'       => esc_html__( 'Accent Color', 'trikon' ),
    'section'     => $section,
    'default'     => '#6F4A32',
    'priority'    => 10,

) );

// ---------------------------------------------
Kirki::add_field( 'trikon', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,

) );
// ---------------------------------------------

Kirki::add_field( 'trikon', array(
    'type'        => 'color',
    'settings'    => 'main_menu_border_color',
    'label'       => esc_html__( 'Border Color', 'trikon' ),
    'section'     => $section,
    'default'     => '#DEDEDE',
    'priority'    => 10,

) );

// ---------------------------------------------
Kirki::add_field( 'trikon', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,

) );
// ---------------------------------------------
