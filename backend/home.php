<?php


    $number1 = 257;
    $number2 = 10;
    echo $number1 + $number2;
    echo '<br>';

    $str1 = "Hello";
    $str2 = 'World';
    $str3 = "[String]: ".$str1.$str2.'<br>'; // конкатенация строк
    echo $str3;
    
    echo '$str2 $number1<br>';
    echo "$str2 $number1<br>"; // " - доступ к значениям переменных


    const NICKNAME = 'mirehiko';
    define('COOLNAME', 'heroman');

    # простой массив
    $arr = array(1, 2, 3);
    var_dump($arr);
    echo '<br>';

    # ассоциативный массив
    $arr = [];
    $arr['one'] = 1;
    $arr['two'] = 2;
    $arr['tree'] = 3;
    array_push($arr, 5);
    var_dump($arr); 
    echo '<br>';

    $arr2 = array(
        'Russia' => 'Moscow',
        'Japan'  => 'Tokyo',
        'Germany' => 'Berline',
        'Italy'  => 'Rome'
    );
    var_dump($arr2); 
    echo '<br>';
    
    
    // Show type of varriable
    echo gettype($arr),"<br>";
    echo gettype($number1),"<br>";
    echo gettype($str1),"<br>";

    /* functions and
        multiple comment */

    function printMessage($message) {
        echo "[print]: $message<br>";
    }


    printMessage('WTF?');


    if ($_GET['pass'] === 'pass') {
        echo var_dump($_GET);
    }
    else {
        echo 'No get params data';
    }
?>