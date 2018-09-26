<?php
/**
 * Created by PhpStorm.
 * User: Mehdi
 * Date: 9/26/2018
 * Time: 12:01 PM
 */

class Product
{
    const PRICE_META_KEY = 'product_price';
    public static function price($product_id)
    {
        $price=get_post_meta($product_id,self::PRICE_META_KEY,true);
        if (!$product_id){
            return 0;
        }
        if (intval($price)>0){
            return Utility::persian_numbers(number_format(apply_filters('product_price', $price)));
        }
        return 0;
    }
}