<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

class Animal
{
    public $name;
    private $legs;

    public function setLegs($legs)
    {
        $this->legs = $legs;
    }

    public function getLegs()
    {
        return $this->legs;
    }

    public function sound()
    {
        echo "animal sounds.." . "<br>";
    }
}

$cat = new Animal();

$cat->name = "Cat";


$cat->setLegs(4);

$numOfLegs = $cat->getLegs();

echo "$numOfLegs";

?>
