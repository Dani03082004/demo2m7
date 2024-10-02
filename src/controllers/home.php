<?php

    require MODS.'/home.php';

    // $db=connectMysql($dsn,$dbuser,$dbpassword);
    // $sql="SELECT * FROM books";
    $db=connectMysql($dsn,$dbuser,$dbpassword);
    $books=query($db,"SELECT * FROM books");
    
    /* $stmt=$db->prepare($sql);
    if($stmt->execute()){
    $books=$stmt->fetchAll();
    } */
    // dd($books);

    require VIEWS.'/home.view.php';
