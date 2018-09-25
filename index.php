<?php
function wxyz($new_user, $second)
{
    echo "<br/>wxyz {$second}{$new_user}";
}


add_action('mbuss', 'wxyz', 9, 2);

do_action('mbuss', "Mehdi ", 135);