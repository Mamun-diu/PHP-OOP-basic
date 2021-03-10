<!-- get method -->
<?php
    class abc{
        private $data = ["name"=>"Al Mamun","course"=>"PHP","fee"=>"2000"];

        public function __get($property){
            if(array_key_exists($property,$this->data)){
                return $this->data[$property];
            }else{
                return "No data found";
            }
        }
    }

    $test = new abc();
    echo $test->name;

?>