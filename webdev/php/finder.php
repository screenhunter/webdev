<?php
    $letter = $_GET["letter"];
    $length = intval($_GET["length"]) - 1;
    $file = file_get_contents("../res/enable1.txt"); 
    $pattern = '/^' + $letter + '[a-zA-Z]' + $length + '$/'; 
    preg_match_all($pattern, $file, $matches );
    print_r($matches); 
?>