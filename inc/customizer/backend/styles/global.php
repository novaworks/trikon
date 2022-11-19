<?php
$sep_id  = 4544;
$section = 'style_global';

Kirki::add_field( 'trikon', array(
    'type'        => 'color',
    'settings'    => 'bg_color',
    'label'       => esc_html__( 'Body Background', 'trikon' ),
    'section'     => $section,
    'default'     => '#FFF',
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
    'settings'    => 'primary_color',
    'label'       => esc_html__( 'Main Font Color', 'trikon' ),
    'section'     => $section,
    'default'     => '#777777',
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
    'settings'    => 'secondary_color',
    'label'       => esc_html__( 'Secondary Font Color', 'trikon' ),
    'section'     => $section,
    'default'     => '#212121',
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
    'settings'    => 'accent_color',
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

// ---------------------------------------------

Kirki::add_field( 'trikon', array(
    'type'        => 'color',
    'settings'    => 'accent_color_2',
    'label'       => esc_html__( 'Accent Color 2', 'trikon' ),
    'section'     => $section,
    'default'     => '#d9f293',
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
    'settings'    => 'border_color',
    'label'       => esc_html__( 'Border Color', 'trikon' ),
    'section'     => $section,
    'default'     => '#E2E1E4',
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
    'settings'    => 'site_link_color',
    'label'       => esc_html__( 'Link Color', 'trikon' ),
    'section'     => $section,
    'default'     => '#212121',
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
    'settings'    => 'site_link_hover_color',
    'label'       => esc_html__( 'Link Hover Color', 'trikon' ),
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
    'settings'    => 'primary_button_color',
    'label'       => esc_html__( 'Primary Button Color', 'trikon' ),
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
    'settings'    => 'secondary_button_color',
    'label'       => esc_html__( 'Secondary Button Color', 'trikon' ),
    'section'     => $section,
    'default'     => '#212121',
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
    'type'        => 'number',
    'settings'    => 'button_radius',
    'label'       => esc_html__( 'Button Radius', 'trikon' ),
    'section'     => $section,
    'default'     => 0,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 0,
        'max'  => 100,
        'step' => 1
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'trikon', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'trikon', array(
    'type'        => 'number',
    'settings'    => 'field_radius',
    'label'       => esc_html__( 'Field Radius', 'trikon' ),
    'section'     => $section,
    'default'     => 0,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 0,
        'max'  => 100,
        'step' => 1
    ),
) );
