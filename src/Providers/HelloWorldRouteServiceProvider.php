<?php
public function register()
       {
           $this->getApplication()->register(HelloWorldRouteServiceProvider::class);
       }
namespace HelloWorld\Providers;
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
class HelloWorldRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
    }
}
