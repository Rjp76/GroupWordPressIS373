<?php
/**
 * Plugin Name: rkplugin
 * Plugin URI: https://www.yourwebsiteurl.com/
 * Description: This is the very first plugin I ever created.
 * Version: 1.0
 * Author: Rati Patel & Kruti Mistry
 * Author URI: http://yourwebsiteurl.com/
 **/

function dh_modify_read_more_link() {

    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';

}

add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );