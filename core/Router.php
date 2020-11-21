<?php

class Router
{

  protected $routes = [];
  protected $params = [];

  public function add($route, $params = [])
  {
    // echo $route . '<br>';
    $route = preg_replace('/\//', '\\/', $route);
    // echo $route . '<br>';

    $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $route);
    //echo $route . '<br>';

    $route = '/^' . $route . '$/i';
    //echo $route . '<br>';

    $this->routes[$route] = $params;
  }

  public  function getRoutes()
  {
    return $this->routes;
  }

  public function match($url)
  {
    // echo $url;
    // foreach ($this->routes as $route => $params) {

    //   if ($url == $route) {
    //     $this->params = $params;
    //     return true;
    //   }
    // }
    // return false;
    // $reg_ex = "/^(?P<controller>[a-z-]+)\/(?P<action>[a-z-]+)$/ ";
    foreach ($this->routes as $route => $params) {

      if (preg_match($route, $url, $matches)) {

        $params = [];
        foreach ($matches as $key => $match) {
          if (is_string($key)) {
            $params[$key] = $match;
          }
        }
      }
    }
    $this->params = $params;
    return true;
  }

  public function getParams()
  {
    return $this->params;
  }
}
