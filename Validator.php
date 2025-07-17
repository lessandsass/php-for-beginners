<?php

class Validator
{
    
    public static function string($value, $min = 1, $max = 255) 
    {
        return strlen(trim($value)) >= $min && strlen(trim($value)) <= $max;
    }

}
 



