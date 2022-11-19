<?php

/**
 * @author: Nova-works
 */

if ( ! class_exists( 'NovaThemesAddCustomFonts' ) ) {
	class NovaThemesAddCustomFonts {

		/**
		 * The single class instance.
		 * @var $_instance
		 */
		private static $_instance = null;

		/**
		 * Main Instance
		 * Ensures only one instance of this class exists in memory at any one time.
		 */
		public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
				self::$_instance->init_hooks();
			}
			return self::$_instance;
		}

		public function __construct() {
			// We do nothing here!
		}

		/**
		 * Init hooks
		 */
		public function init_hooks() {
			add_filter( 'novathemes_fonts_list', [ $this, 'custom_fonts' ], 20 );
			add_filter( 'novathemes_fonts_list', [ $this, 'typekit_fonts' ], 20 );
		}

		/**
		 * Custom fonts
		 */
		public function custom_fonts( $fonts ) {

			$custom_fonts = get_option( 'novathemes-custom-fonts' );

			if ( ! empty( $custom_fonts ) ) {

				$fonts[ 'families' ][ 'custom_fonts' ] = array(
					'text' => esc_html__( 'Custom Fonts', 'novathemes' ),
					'children' => []
				);

				foreach( $custom_fonts as $font => $key ) {

					$fonts[ 'families' ][ 'custom_fonts' ][ 'children' ][] = [
						'id' => $font,
						'text' => $font
					];

					$fonts[ 'variants' ][ $font ] = [ '100', '200', '300', '400', '500', '600', '700', '800', '900' ];

				}

			}

			return $fonts;

		}

		/**
		 * Typekit fonts
		 */
		public function typekit_fonts( $fonts ) {

			$typekit_fonts = get_option( 'kitify-typekit-fonts' )[ 'custom-typekit-font-details' ];
			if ( ! empty( $typekit_fonts ) ) {

				$fonts[ 'families' ][ 'typekit_fonts' ] = array(
					'text' => esc_html__( 'TypeKit Fonts', 'trikon' ),
					'children' => []
				);

				foreach( $typekit_fonts as $font ) {

					$id = $font[ 'slug' ];

					$fonts[ 'families' ][ 'typekit_fonts' ][ 'children' ][] = [
						'id' => $font[ 'slug' ],
						'text' => $font[ 'family' ]
					];

					$fonts[ 'variants' ][ $id ] = $font[ 'weights' ];

				}

			}
			return $fonts;

		}

	}

	return NovaThemesAddCustomFonts::instance();

}
