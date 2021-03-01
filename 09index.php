<!-- Traits -->

<?php
    trait hello{
        public function sayHello(){
            echo "Hello Everyone.<br>";
        }
        public function sayHi(){
            echo "Hi Everyone.<br>";
        }
    }

    trait bye{
        public function saybye(){
            echo "Bye Bye Everyone.<br>";
        }
    }

    class base{
        use hello;
        use bye;
    }
    class base2{
        use hello;
    }

    $test = new base();
    $test2 = new base2();
    $test->sayHello();
    $test->sayHi();
    $test->saybye();

    
    $test2->sayHello();

?>