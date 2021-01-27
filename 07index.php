<?php
    class base{
        public static $name = "Al - Mamun";
        
        // public function __construct($n){
        //     self::$name = $n;
        // }
    }
    class derived extends base{
        public static function show(){
            echo parent::$name."<br>";
        }
    }

    // echo base::$name."<br>";
    // $test = new base("Wow");
    
    $test2 = new derived();
    $test2->show();

?>