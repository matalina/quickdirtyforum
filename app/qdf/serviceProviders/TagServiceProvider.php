<?php namespace Matalina\Qfd\ServiceProviders;

use Illuminate\Support\ServiceProvider;
 
class TagServiceProvider extends ServiceProvider {
 
  public function register()
  {
    $this->app->bind(
      'TagRepository',
      'DbTagRepository'
    );
  }
}