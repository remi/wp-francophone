<?php
/*
Plugin Name: WP_Francophone
Plugin URI: http://github.com/remiprev/wp-francophone/
Version: 0.15
Description: A small WordPress plugin to add a few french-specific filters and actions.
Author: Rémi Prévost
Author URI: http://remiprevost.com
*/

/**
 * @classname WP_Francophone
 * @author remi (exomel.com)
 * @version 20100103
 */
class WP_Francophone {

	/**
	 * Set filters and actions
	 * @constructor
	 */
	function WP_Francophone() {
		add_filter( 'the_time', array( $this, 'date_i18n' ) );
		add_filter( 'get_the_time', array( $this, 'date_i18n' ) );
		add_filter( 'get_comment_time', array( $this, 'date_i18n' ) );
		add_filter( 'get_comment_date', array( $this, 'date_i18n') );
	}

	/**
	 * Turns "1 janvier 2010" to "1<sup>er</sup> janvier 2010"
	 * @param string $date
	 * @return string
	 */
	function date_i18n( $date ) {
		return preg_replace( '/(\s|^)1\s/', '1<sup>er</sup> ', $date );
	}

}

$WP_Francophone = new WP_Francophone();
