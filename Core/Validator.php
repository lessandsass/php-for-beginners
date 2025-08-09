<?php

namespace Core;

class Validator
{
    
    public static function string($value, $min = 1, $max = 255) 
    {
        return strlen(trim($value)) >= $min && strlen(trim($value)) <= $max;
    }

    public static function email($value) 
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

}
 



