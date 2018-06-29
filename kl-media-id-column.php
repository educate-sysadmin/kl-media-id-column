<?php
/*
Plugin Name: KL Media Id Column
Plugin URI: https://github.com/educate-sysadmin/kl-media-id-column
Description: Wordpress plugin to show media id in media listing
Version: 0.1
Author: b.cunningham@ucl.ac.uk
Author URI: https://educate.london
License: GPL2
*/

function column_id($columns) {
    $columns['colID'] = __('ID');
    return $columns;
}
add_filter( 'manage_media_columns', 'column_id' );

function column_id_row($columnName, $columnID){ if($columnName == 'colID'){ echo $columnID; } } add_filter( 'manage_media_custom_column', 'column_id_row', 10, 2 ); 
