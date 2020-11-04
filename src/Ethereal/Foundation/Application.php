<?php

namespace Ethereal\Foundation;

class Application extends Container
{
    const RELEASE_VERSION = 'v0.1.0';
  
    const RELEASE_VERSION_ID = 0x0065;
  
    protected $basePath;
  
    public function getVersion()
    {
      return self::RELEASE_VERSION;
    }
  
    public function getVersionId()
    {
      return self::RELEASE_VERSION_ID;
    }
  
    public function __construct($basePath)
    {
      $this->useBasePath($basePath);
    }
  
    public function useBasePath(string $basePath)
    {
      $this->basePath = realpath($basePath) ?: $basePath;
    }
    
    public function basePath(string $path = '')
    {
      return $this->basePath . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}
