<?php
    // ob_start(); //this should be first line of your page
    $page = '';
    // var_dump($page);


    switch($_SERVER["REQUEST_URI"]) {
        case '/':
            $page = "home.php";
            break;
        case '/post.php': 
            $page = "post/post.php";
            break;
        case '/files.php': 
            $page = "files/files.php";
            break;
        default: 
            $page = "404.php";
            break;
    }

    // var_dump($page);
    // var_dump($_SERVER);

    if (file_exists($page)) {
        header('Location: '.$page);
    } else {
        header('Location: 404.php');
    }

    exit();
    // ob_end_flush(); //this should be last line of your page
?>