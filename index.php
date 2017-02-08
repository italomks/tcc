<?php
/**
 * Created by PhpStorm.
 * User: italo
 * Date: 08/02/17
 * Time: 10:22
 */
function g_void_helper_checked($value, $value2)
{
    if ($value == $value2) {
        echo 'checked=checked';
    }
}