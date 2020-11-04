<?php

namespace Ethereal\Support\Facades;

abstract class Facade
{
    abstract public static function getFacadeAccessorName(): string;
  
    public static function getFacadeInstance(): object
    {
        $accessor = static::getFacadeAccessorName();
    
        return app($accessor);
    }
  
    public static function __callStatic($method, $arguments)
    {
        $instance = static::getFacadeInstance();
    
        return $instance->{$method}(...$arguments);
    }
}
