<?php
    
    require 'config.php';
    require 'helper.php';

    $controller=router($routes);

    require CONTR.'/'.$controller.'.php';
    //var_dump($path,$query);
    //front controller
  //  require VIEWS.'/index.view.php';