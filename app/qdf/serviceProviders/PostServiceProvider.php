<?php namespace Matalina\Qfd\ServiceProviders;

use Illuminate\Support\ServiceProvider;
 
class PostServiceProvider extends ServiceProvider {
 
  public function register()
  {
    $this->app->bind(
      'PostRepository',
      'DbPostRepository'
    );
  }
}