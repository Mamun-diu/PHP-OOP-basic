<!-- destruct Methods -->
<?php
    class abc{
        public function __construct(){
            echo "This is Construct function <br>";
        }
        public function hello(){
            echo "Hello Everyone <br>";
        }
        public function __destruct(){
            echo "This is destruct function<br>";
        }
    }

    $test = new abc();
    $test->hello();
?>