<?php

namespace Ethereal\Foundation;

abstract class ServiceProvider
{
  /**
   * @var \Ethereal\Foundation\Application
   */
  protected $app;
  
  public function __construct(Application $app)
  {
    $this->app = $app;
  }
  
  public function boot()
  {
    //
  }
  
  public function load()
  {
    //
  }
}