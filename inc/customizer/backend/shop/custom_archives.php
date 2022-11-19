<?php

$sep_id  = 7439;
$section = 'shop_custom_archives';

Kirki::add_field( 'trikon', array(
    'settings'    => 'general_section_heading',
    'section'     => $section,
    'type'        => 'custom',
    'default'     => wp_kses(__( '<span class="big-separator">General</span>', 'trikon' ),'simple'),
) );
Kirki::add_field( 'trikon', array(
    'type'        => 'slider',
    'settings'    => 'shop_product_columns',
    'label'       => esc_html__( 'Number of Columns', 'trikon' ),
    'section'     => $section,
    'default'     => 3,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 1,
        'max'  => 6,
        'step' => 1
    ),
) );

Kirki::add_field( 'trikon', array(
    'type'        => 'text',
    'settings'    => 'product_per_page_allow',
    'label'       => esc_html__( 'WooCommerce Number of Products per Page Allow', 'trikon' ),
    'section'     => $section,
    'default'     => esc_html__( '12,15,30', 'trikon' ),
    'description'        => esc_html__('Comma-separated. ( i.e: 3,6,9 )', 'trikon'),
    'priority'    => 10,
) );

Kirki::add_field( 'trikon', array(
    'type'        => 'slider',
    'settings'    => 'shop_product_per_page',
    'label'       => esc_html__( 'WooCommerce Number of Products per Page', 'trikon' ),
    'section'     => $section,
    'default'     => 12,
    'description' => esc_html__('The value of field must be as one value of setting above.', 'trikon'),
    'priority'    => 10,
    'choices'     => array(
        'min'  => 1,
        'max'  => 100,
        'step' => 1
    ),
) );
Kirki::add_field( 'trikon', array(
    'type'        => 'toggle',
    'settings'    => 'shop_product_addtocart_button',
    'label'       => esc_html__( 'Show add to cart button', 'trikon' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,
) );

Kirki::add_field( 'trikon', array(
    'type'        => 'toggle',
    'settings'    => 'shop_product_wishlist_button',
    'label'       => esc_html__( 'Show Wishlist button', 'trikon' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,
) );

Kirki::add_field( 'trikon', array(
    'type'        => 'toggle',
    'settings'    => 'shop_product_quickview_button',
    'label'       => esc_html__( 'Show Quickview button', 'trikon' ),
    'section'     => $section,
    'default'     => true,
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
    'type'        => 'toggle',
    'settings'    => 'shop_second_image',
    'label'       => esc_html__( 'Product Image on Hover', 'trikon' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10,
) );
Kirki::add_field( 'trikon', array(
    'settings'    => 'toolbar_section_heading',
    'section'     => $section,
    'type'        => 'custom',
    'default'     => wp_kses(__( '<span class="big-separator">Toolbar</span>', 'trikon' ),'simple'),
) );

Kirki::add_field( 'trikon', array(
    'type'        => 'toggle',
    'settings'    => 'shop_toolbar_grid_list',
    'label'       => esc_html__( 'Show Grid List Switch', 'trikon' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,
) );

Kirki::add_field( 'trikon', array(
    'settings'    => 'sales_section_heading',
    'section'     => $section,
    'type'        => 'custom',
    'default'     => wp_kses(__( '<span class="big-separator">Sales</span>', 'trikon' ),'simple'),
) );
Kirki::add_field( 'trikon', array(
    'type'        => 'toggle',
    'settings'    => 'sale_page_badge_type',
    'label'       => esc_html__( 'Show Discount percentage ', 'trikon' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10,
) );
Kirki::add_field( 'trikon', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );

Kirki::add_field( 'trikon', array(
    'type'        => 'text',
    'settings'    => 'sale_page_badge_text',
    'label'       => esc_html__( 'Sale Badge Wording', 'trikon' ),
    'section'     => $section,
    'default'     => esc_html__( 'Sale!', 'trikon' ),
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
    'type'        => 'toggle',
    'settings'    => 'sale_page',
    'label'       => esc_html__( 'Sales Section in Shop', 'trikon' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,
) );

// ---------------------------------------------
Kirki::add_field( 'trikon', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback' => array(
        array(
            'setting'  => 'sale_page',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'trikon', array(
    'type'        => 'text',
    'settings'    => 'sale_page_title',
    'label'       => esc_html__( 'Sales Section Page Title', 'trikon' ),
    'section'     => $section,
    'default'     => esc_html__( 'On Sale!', 'trikon' ),
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'sale_page',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// ---------------------------------------------
Kirki::add_field( 'trikon', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback' => array(
        array(
            'setting'  => 'sale_page',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'trikon', array(
    'type'        => 'text',
    'settings'    => 'sale_page_slug',
    'label'       => esc_html__( 'Sales Section Page Slug', 'trikon' ),
    'section'     => $section,
    'default'     => 'on-sale',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'sale_page',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// ---------------------------------------------

Kirki::add_field( 'trikon', array(
    'settings'    => 'newproducts_section_heading',
    'section'     => $section,
    'type'        => 'custom',
    'default'     => wp_kses(__( '<span class="big-separator margin-top">New Products</span>', 'trikon' ),'simple'),
) );

Kirki::add_field( 'trikon', array(
    'type'        => 'toggle',
    'settings'    => 'new_products_page',
    'label'       => esc_html__( 'New Products Section in Shop', 'trikon' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,
) );

// ---------------------------------------------
Kirki::add_field( 'trikon', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback' => array(
        array(
            'setting'  => 'new_products_page',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'trikon', array(
    'type'        => 'text',
    'settings'    => 'new_products_badge_text',
    'label'       => esc_html__( 'New Products Badge Wording', 'trikon' ),
    'section'     => $section,
    'default'     => esc_html__( 'New!', 'trikon' ),
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'new_products_page',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// ---------------------------------------------
Kirki::add_field( 'trikon', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback' => array(
        array(
            'setting'  => 'new_products_page',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'trikon', array(
    'type'        => 'text',
    'settings'    => 'new_products_page_title',
    'label'       => esc_html__( 'New Products Section Page Title', 'trikon' ),
    'section'     => $section,
    'default'     => esc_html__( 'New Products', 'trikon' ),
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'new_products_page',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// ---------------------------------------------
Kirki::add_field( 'trikon', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback' => array(
        array(
            'setting'  => 'new_products_page',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'trikon', array(
    'type'        => 'text',
    'settings'    => 'new_products_page_slug',
    'label'       => esc_html__( 'New Products Section Page Slug', 'trikon' ),
    'section'     => $section,
    'default'     => 'new-products',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'new_products_page',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// ---------------------------------------------
Kirki::add_field( 'trikon', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback' => array(
        array(
            'setting'  => 'new_products_page',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'trikon', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'new_products_number_type',
    'label'       => esc_html__( 'Show new products by:', 'trikon' ),
    'section'     => $section,
    'default'     => 'last_added',
    'priority'    => 10,
    'choices'     => array(
        'day'       => esc_html__('Day Added', 'trikon'),
        'last_added'    => esc_html__('Last Added', 'trikon'),
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'new_products_page',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

// ---------------------------------------------

Kirki::add_field( 'trikon', array(
    'type'        => 'slider',
    'settings'    => 'new_products_number',
    'label'       => wp_kses(__( 'Show products added in the past <i>x</i> days:', 'trikon' ),'simple'),
    'section'     => $section,
    'default'     => 8,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 1,
        'max'  => 360,
        'step' => 1
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'new_products_page',
            'operator' => '==',
            'value'    => true,
        ),
        array(
            'setting'  => 'new_products_number_type',
            'operator' => '==',
            'value'    => 'day',
        )
    ),
) );

Kirki::add_field( 'trikon', array(
    'type'        => 'slider',
    'settings'    => 'new_products_number_last',
    'label'       => wp_kses(__( 'Show last <i>x</i> products:', 'trikon' ),'simple'),
    'section'     => $section,
    'default'     => 8,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 1,
        'max'  => 20,
        'step' => 1
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'new_products_page',
            'operator' => '==',
            'value'    => true,
        ),
        array(
            'setting'  => 'new_products_number_type',
            'operator' => '==',
            'value'    => 'last_added',
        )
    ),
) );
