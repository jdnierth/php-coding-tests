<?php
class Person{
    public $age;

    public function __construct($initialAge){

        if($initialAge > 0) {
            $this->age = $initialAge;
        } else {
            $this->age = 0;
            print "Age is not valid, setting age to 0.\n";
        }

    }
    public function amIOld(){
        $age = $this->age;
        if($age < 13) {
            print "You are young.\n";
        } else if($age >= 13 && $age < 18) {
            print "You are a teenager.\n";
        } else {
            print "You are old.\n";
        }

    }

    public function yearPasses(){
        $this->age = $this->age + 1;
    }

}