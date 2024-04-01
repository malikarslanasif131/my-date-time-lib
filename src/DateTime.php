<?php

namespace MyDateTimeLib;

class DateTime
{
    public static function getCurrentDateTime()
    {
        $abc = date('Y-m-d H:i:s');
        $xyz = "Hello Your Current Time is = ";
        return $abc . $xyz;
    }
}
