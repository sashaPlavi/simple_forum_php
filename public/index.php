 <?php

  //echo $_SERVER['QUERY_STRING'];

  require '../core/Router.php';
  $router = new Router();
  echo get_class($router);
  ?>


 <div class="card">
   <h1>Welcome</h1>
 </div>