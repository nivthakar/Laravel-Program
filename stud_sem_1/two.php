<?php
class demo{

    
    public $brand;
    public $price;
}

$samsung = new demo();
$samsung->brand="S25 ultra";
$samsung->price=100000;

echo "I have a phone Samsung ",$samsung->brand," & it's price is ",$samsung->price;


?>