<?php

namespace Ethereal\Support;

class Arr
{
    public static function isAssoc($arr)
    {
        $indexes = array_keys($arr);
    
        return array_keys($indexes) !== $indexes;
    }
}
