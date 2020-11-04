<?php

namespace Ethereal\Foundation;

use ArrayAccess;

class Container implements ArrayAccess
{
  private static $instance;
  
  public function bind($name, $value)
  {
    //
  }
  
  public function make($name)
  {
    //
  }
    
  public function offsetExists($offset)
  {
    return false;
  }
    
  public function offsetGet($offset)
  {
    return null;
  }
    
  public function offsetSet($offset, $value)
  {
    //
  }
    
  public function offsetUnset($offset)
  {
    //
  }
    
  public static function setInstance(self $app)
  {
    self::$instance = $app;
  }
      
  public static function getInstance(): self
  {
    return self::$instance;
  }
}
