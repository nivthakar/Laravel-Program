<?php 
class info{


    public $name;
    public $age;

    function setinfo($name,$age){

        $this->name=$name;
        $this->age=$age;

    }
    function getinfo(){

        return "Your name is ".$this->name." Your age is ".$this->age;
    }
}

$obj =new info();
$obj1 =new info();
$obj->setinfo("Ravi",19);
$obj1->setinfo("Samir",20);
echo $obj->getinfo();
echo"<br>";
echo $obj1->getinfo();
?>