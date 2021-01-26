<?php
    class base{
        public $name = "Parent Class"."<br>";
        public function calc($a, $b){
            return $a * $b;
        }
    }
    class derived extends base{
        public $name = "Child Class"."<br>";
        // public function calc($a, $b){
        //     return $a + $b;
        // }
    }

    $test = new base();
    echo $test->name;
    echo $test->calc(10,20)."<br>";

    $test2 = new derived();
    echo $test2->name;
    echo $test2->calc(10,20)."<br>";
?>