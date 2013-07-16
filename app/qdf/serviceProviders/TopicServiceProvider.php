<?php namespace Matalina\Qfd\ServiceProviders;

use Illuminate\Support\ServiceProvider;
 
class TopicServiceProvider extends ServiceProvider {
 
  public function register()
  {
    $this->app->bind(
      'TopicRepository',
      'DbTopicRepository'
    );
  }
}