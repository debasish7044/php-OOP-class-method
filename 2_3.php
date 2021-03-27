<?php 

class User {
   public $name;

   public function sayHello(){
      return $this->name ."says hello";
   }
}

$user1 = new User();

echo $user1->name = "debasish ";

echo "<br>";

echo $user1->sayHello();


