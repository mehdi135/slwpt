<?php
include "constants.php";
include "app/autoloader.php";

function sl_after_setup_theme(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','sl_after_setup_theme');