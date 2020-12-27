<?php
    class person{
        public $name, $age;
        public function __construct($name="No-name",$age=0){
            $this->name = $name;
            $this->age = $age;
        }

        function show(){
            echo $this->name ." - " . $this->age."<br>";
        }
    }

    $p1 = new person();
    $p2 = new person("Mamun",22);
    $p3 = new person("Salman Khan",58);
    $p1->show();
    $p2->show();
    $p3->show();
?>