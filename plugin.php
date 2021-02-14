<?php

/**
 * Plugin Name: Vaibhav Block
 * Author: Brad
 * Version: 1.0.0
 */

function loadMyBlockFiles() {
  wp_enqueue_script(
    'my-super-unique-handle',
    plugin_dir_url(__FILE__) . 'my-block.js',
    array('wp-blocks', 'wp-i18n', 'wp-editor'),
    true
  );
}
 
add_action('enqueue_block_editor_assets', 'loadMyBlockFiles');

if(isset($_POST['submit'])){

 global $wpdb;
 
 
 $firstName = $_POST["entername"];
                  $lastName = $_POST["enteremail"];
 
  $contactus_table = $wpdb->prefix."contactus";
        //error with the query 
        $sql = "INSERT INTO wp_schbang (name, email) VALUES ('$firstName', '$lastName')";

               if($wpdb->query($sql)) 
               {
               $BlogName = get_bloginfo();
             
               }
			 
	}			 
		 
				 
/* To make your block "dynamic" uncomment
  the code below and in your JS have your "save"
  method return null
*/

/*
function borderBoxOutput($props) {
  return '<h3 style="border: 5px solid' . $props['color'] . '">' . $props['content'] . '</h3>';
}

register_block_type( 'brad/border-box', array(
  'render_callback' => 'borderBoxOutput',
) );
*/

/* To Save Post Meta from your block uncomment
  the code below and adjust the post type and
  meta name values accordingly. If you want to
  allow multiple values (array) per meta remove
  the 'single' property.
*/

/*
function myBlockMeta() {
  register_meta('post', 'color', array('show_in_rest' => true, 'type' => 'string', 'single' => true));
}

add_action('init', 'myBlockMeta');
*/