<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'footer', array(
    'title'          => esc_html__( 'Footer', 'trikon' ),
    'priority'       => 60,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 48536;
$section = 'footer';
Kirki::add_field( 'trikon', array(
    'type'     => 'textarea',
    'settings' => 'footer_text',
    'label'    => esc_html__( 'Copyright Text', 'trikon' ),
    'section'  => $section,
    'default'  => esc_html__( '© 2022 Trikon All rights reserved. Designed by Novaworks', 'trikon' ),
    'priority' => 10,
) );
