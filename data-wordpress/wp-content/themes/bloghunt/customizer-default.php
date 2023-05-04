<?php
/**
 * Default theme options.
 *
 * @package Bloghunt
 */

if (!function_exists('bloghunt_get_default_theme_options')):

/**
 * Get default theme options
 *
 * @since 1.0.0
 *
 * @return array Default theme options.
 */
function bloghunt_get_default_theme_options() {

    $defaults = array();

    $defaults['select_recent_news_category'] = 0;
    $defaults['show_main_news_section'] = 0;

	return $defaults;

}
endif;