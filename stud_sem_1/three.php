<?php
class demo{

    function mem(){
        echo "<h2>This is method</h2><br> ";
    }
    function __destruct()
    {
        echo "<h2>This is destruct<h2><br>";
    }
    function __construct(){

        echo "<h2>This is construct</h2><br> ";

    }



}

$obj =new demo();
$obj->mem();
?>