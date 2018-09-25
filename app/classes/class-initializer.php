<?php
/**
 * Created by PhpStorm.
 * User: Mehdi
 * Date: 9/25/2018
 * Time: 10:49 PM
 */

class Initializer
{
    public static function setup()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
    }
}