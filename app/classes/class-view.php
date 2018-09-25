<?php
/**
 * Created by PhpStorm.
 * User: Mehdi
 * Date: 9/25/2018
 * Time: 8:14 PM
 */

class View
{
    public static function __callStatic($name, $arguments)
    {
        if ($name=='render'){
            self::render_view($arguments[0]);
        }
    }

    private static function render_view($view_name)
    {
        get_template_part('views/'.$view_name);
    }
}