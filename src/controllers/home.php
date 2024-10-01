<?php

    require MODS.'/home.php';

    $db=connectMysql($dsn,$dbuser,$dbpassword);
    $sql="SELECT * FROM books";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $books=$stmt->fetchAll();
    print "Resultado de la consulta en la BD"."<br>";
    print "<br>";
    // dd($books);

    require VIEWS.'/home.view.php';
