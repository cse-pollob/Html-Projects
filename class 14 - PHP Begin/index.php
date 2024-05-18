<?php
    $greet="Hello";

    $arr=[
        '1',
        '2',
        'my_key' => 'hello'
    ];

    function printGreet()
    {
        echo $GLOBALS['greet'];
    }
    print_r($arr);
    printGreet();
    echo "<br>";


    class TestClass{
        public $text=
    }
?>