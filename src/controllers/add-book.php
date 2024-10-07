<?php

if (!empty($_POST) &&
    !empty($_POST['title']) && 
    !empty($_POST['author']) && 
    !empty($_POST['year'])) {
        $title = filter_input(INPUT_POST,'title');
        $author = filter_input(INPUT_POST,'author');
        $year = filter_input(INPUT_POST,'year');

    // conectar a BBDD 
    $db=connectMysql($dsn,$dbuser,$dbpassword);
    // insertprove($db,'books',['title'=>$title,'author'=>$author,'year'=>$year]);

    // insertar
    // $stmt=$db->prepare(query: "INSERT INTO books (title,author,year) VALUES(?,?,?)");

    // SI QUEREMOS HACERLO CON EL bindParam

    // $stmt=$db->prepare(query: "INSERT INTO books (title,author,year) VALUES(:title,:author,:year)");
    // $stmt->bind_param(':title', $title);
    // $stmt->bind_param(':author', $author);
    // $stmt->bind_param(':year', $year);

    if(insertprove($db,'books',[
        'title'=>$title,
        'author'=>$author,
        'year'=>$year,
    ])){
        // volver a home
        header('Location:home');
    }else{
        header('Location:add');
    }
} else{
    header('Location:add');
}