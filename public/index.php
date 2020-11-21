 <?php

  $url =    $_SERVER['QUERY_STRING'];

  require '../core/Router.php';
  $router = new Router();
  //echo get_class($router);


  $router->add('/', ['controller' => 'Home', 'action' => 'index']);
  $router->add('/posts', ['controller' => 'Posts', 'action' => 'index']);
  //$router->add('/posts/new', ['controller' => 'Posts', 'acction' => 'new']);
  $router->add('{controller}/{action}');
  // $router->add('admin/{action}/{controller}');

  echo '<pre>';
  var_dump($router->getRoutes());
  echo '<pre>';

  // if ($router->match($url)) {
  //   // echo $url;
  //   echo '<pre>';
  //   var_dump($router->getParams());
  //   echo '<pre>';
  // } else {
  //   echo '  no route is find';
  // }


  ?>


 <div class="card">
   <h1>Welcome</h1>
 </div>