<?php
/**
 * Created by PhpStorm.
 * User: Mehdi
 * Date: 9/26/2018
 * Time: 9:54 AM
 */

class Utility
{
    public static function persian_numbers($input)
    {
        $persian_numbers = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
        $en_numbers=array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        return str_replace($en_numbers,$persian_numbers,$input);
    }
}