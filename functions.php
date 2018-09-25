<?php
function mb_new_user_id($new_user, $second)
{
    echo "new user = {$new_user}{$second}";
}

function mb_bagheri($new_user, $second)
{
    echo "<br/>bagheri {$second}";
}

class User
{
    public function login()
    {
        echo "<br/>login method";
    }

    public function logout()
    {
        echo "<br/>logout method";
    }

    public static function register($second)
    {
        echo "<br/>Static Rejester {$second}";
    }
}

$new_user_object = new User();
add_action('mbus', 'mb_new_user_id', 10, 2);
add_action('mbus', 'mb_bagheri', 20, 2);
add_action('mbus', array($new_user_object, 'login')/*,array($new_user_object, 'logout')*/, 30, 2);
add_action('mbus', 'User::register', 40, 1);

do_action('mbus', "Mehdi ", 135);