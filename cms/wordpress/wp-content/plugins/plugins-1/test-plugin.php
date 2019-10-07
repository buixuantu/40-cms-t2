<?php
/**
 * Plugin Name: Test Plugin
<<<<<<< HEAD
 * Author: BuiXuanTu
=======
 * Author: Khang
>>>>>>> 2008f9d2573023c254af82f6744a0a93708a143a
 * Version: 1.0.0
 */
  

function test_register_post_meta() {
    register_post_meta( 'post', 'test_meta_block_field', array(
        'show_in_rest' => true,
        'single' => true,
        'type' => 'string',
    ) );
}
add_action( 'init', 'test_register_post_meta' );
function test_enqueue() {
    wp_enqueue_script(
        'test-script',
        plugins_url( 'block.js', __FILE__ ),
        array( 'wp-blocks', 'wp-element', 'wp-components','wp-editor' )
    );
}
add_action( 'enqueue_block_editor_assets', 'test_enqueue' );
function test_register_template() {
    $post_type_object = get_post_type_object( 'post' );
    $post_type_object->template = array(
        array( 'test/meta-block' ),
    );
}
add_action( 'init', 'test_register_template' );
