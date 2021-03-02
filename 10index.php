<!-- Traits Method Overriding -->

<?php
    trait hello{
        public function sayHello(){
            echo "Hello From Hello Trait .<br>";
        }
        
    }
    trait hi{
        public function sayHello(){
            echo "Hello From Hi Trait .<br>";
        }
        
    }

    class base{
        public function sayHello(){
            echo "Hello from base class<br>";
        }
    }
    class child extends base{
        use hello,hi{
            hello::sayHello insteadof hi;
            hi::sayHello as newHello;
        }
    }
    

    $test = new child();
    $test->sayHello();
    $test->newHello();

    

?>