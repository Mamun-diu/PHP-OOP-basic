<?php
   abstract class parentClass{
       public $name;
       
       abstract protected function calc($a, $b);

   } 
   class childClass extends parentClass{
       public function calc($value1, $value2){
        return $value1 * $value2;
       }
   }

   $test = new childClass();
   echo $test->calc(5,10);

?>