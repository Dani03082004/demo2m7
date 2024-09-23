<?php
    
    require 'config.php';
    function router ($url,$routes){
        if(in_array($url,$routes)){
            return $url;
    }
    return "home";
}
$url=$_SERVER['REQUEST_URI'];
$path=parse_url($url)['path'];
//$query=parse_url($path)['query'];
$path=explode("/",$path);
$uri=array_filter($path,function($item){
    if($item!=""){
        return $item;
    }
});
$uri=array_values($uri);
$contr=router($uri[0],routes: $routes);
var_dump(value: $contr);


    // require CONTR.'/add.php';
    //var_dump($path,$query);
    //front controller
  //  require VIEWS.'/index.view.php';