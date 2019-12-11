<?php
function wplearning_theme_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('my-sidebar', get_template_directory_uri().'/materials/js/my-js.js');

}
 
?>