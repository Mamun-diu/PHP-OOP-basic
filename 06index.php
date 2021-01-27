<?php
   interface parent1{
       function calc($a, $b);
   }

   interface parent2{
       function sub($c, $d);
   }

   class childClass implements parent1,parent2{
       public function calc($a, $b){
           echo $a + $b."<br>";
       }
       public function sub($c, $d){
           echo $c - $d."<br>";
       }
   }

   $child = new childClass();
   $child->calc(5,10);
   $child->sub(10,20);

?>