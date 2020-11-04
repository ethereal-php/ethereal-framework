<?php

namespace Ethereal\Support;

use ArrayAccess;
use Countable;

class Collection implements ArrayAccess, Countable
{
  public function __construct()
  {
    
  }
  
  public function count()
  {
    return 0;
  }
  
  public function offsetExists($index)
  {
    return false;
  }
  
  public function offsetGet($index)
  {
    return $index;
  }
  
  public function offsetSet($index)
  {
    $index = $index;
  }
  
  public function offsetUnset($index)
  {
    unset($index);
  }
}