<?php

if (!function_exists('upper')) {
    function upper($value){
    return text\Format::upperText($value);
    }
}

if (!function_exists('lower')) {
    function lower($value)
    {
        return text\Format::lowerText($value);
    }
}
?>