<?php

class Person
{
    public $firstName;
    public $lastName;
    private $dateOfBirth;
 
    public function Person()
    {
        $this->firstName = "Juan";
        $this->lastName = "Perez";
        $this->dateOfBirth = "Que mas da!";
    }

 /*
    public function fullName()
    {
        return "{$this->firstName} {$this->lastName}";
    }
 
    public function age()
    {
        // Calculate age using $this->dateOfBirth...
        return $age;
    }
  */

}

    $aldo = new Person;

    	$aldo->firstName = "Aldo";
    	$aldo->lastName = "Michelis";
    	// $aldo->dateOfBirth = "1973-10-05";

    

    echo $aldo->firstName . "<br>";
    echo $aldo->lastName . "<br>";
    // echo $aldo->dateOfBirth . "<br>";


    getDateOfBirth();

    echo $aldo->dateOfBirth . "<br>";


    function setDateOfBirth(){

    	$this->dateOfBirth = "1973_01_05";
    }
?>