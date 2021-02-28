<!-- Late Static Binding -->

<?php

    class base{
        protected static $name = "Al";
        
        public function show(){
            echo static::$name;
        }
    }
    class derived extends base{
        protected static $name = "Mamun";
    }

    $test = new derived();
    $test->show();

?>