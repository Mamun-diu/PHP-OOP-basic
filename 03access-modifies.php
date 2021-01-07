<?php
  Class Base{
      public $name;
      public function __construct($n){
        $this->name = $n;
      }
      public function show(){
          echo "Your Name : ". $this->name. "<br>";
      }
  }  

  $test = new Base("Mamun");
  $test->name = "Karim";
  $test->show();


  Class Base2{
    protected $name;
    public function __construct($n){
      $this->name = $n;
    }
    protected function show2(){
        echo "Your Name : ". $this->name. "<br>";
    }
}  


$test2 = new Base2("Mamun");
// $test2->name = "Karim";
// $test2->show2();


Class Base3{
    protected $name;
    public function __construct($n){
      $this->name = $n;
    }
    protected function show2(){
        echo "Your Name : ". $this->name. "<br>";
    }
}  
class Derived3 extends Base3{
    public function get(){
        echo "Your Name : ". $this->name. "<br>";
    }
}

$test3 = new Derived3("Al Mamun");
$test3->get();



class Base4{
    private $name;

    public function __construct($n)
    {
        $this->name = $n;
    }
    public function show(){
        echo "Name : ".$this->name."<br>";
    }
}
class Derived4 extends Base4{
    public function get(){
        echo "Name : ".$this->name."<br>";
    }
}

$test4 = new Derived4("Mamun");
$test4->name = "Al";
$test4->get();

?>