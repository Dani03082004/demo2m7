<?php
    
    require 'config.php';
    require 'helper.php';
    require 'src/database.php';

    print '<br>';
    // $db=connectMysql($dsn,$dbuser,$dbpassword); // 1 metodo para crear una base de datos
    // $db=connectSqlite($dbname);  // 2 metodo para crear una base de datos
    var_dump($db);
    $controller=router($routes);


    require CONTR.'/'.$controller.'.php';
    //var_dump($path,$query);
    //front controller
  //  require VIEWS.'/index.view.php';