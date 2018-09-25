<?php
/**
 * Created by PhpStorm.
 * User: Mehdi
 * Date: 9/25/2018
 * Time: 5:28 PM
 */

class Asset
{

//    public static function __callStatic($name, $arguments)
//    {
//        var_dump($name,$arguments);
//    }
    public static function css($file_name)
    {
        $file_url=THEME_URL.'/assets/css/'.$file_name;
        echo $file_url;
    }

    public static function js($file_name)
    {
        $file_url=THEME_URL.'/assets/js/'.$file_name;
        echo $file_url;
    }

    public static function images($file_name)
    {
        $file_url=THEME_URL.'/assets/images/'.$file_name;
        echo $file_url;
    }

}