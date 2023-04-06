<?php
/**
 * Adds ACF blocks - update for each block.
 *
 * @package watkins
 */

namespace RabornMedia\watkins;

/**
 * Adds ACF blocks.
 *
 * @author Raborn Media
 */
function add_acf_blocks() {
	register_block_type( plugin_dir_path( dirname( __FILE__ ) ) . 'blocks/example/block.json' );
}

add_action( 'init', __NAMESPACE__ . '\add_acf_blocks' );
