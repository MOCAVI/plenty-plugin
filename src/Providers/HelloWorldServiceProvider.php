<?php
public function map(Router $router)
  {
      $router->get('hello','HelloWorld\Controllers\ContentController@sayHello');
  }
namespace HelloWorld\Providers;
use Plenty\Plugin\ServiceProvider;
class HelloWorldServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {

   }
}
