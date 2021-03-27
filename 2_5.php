<?php 

class User {
  private $name;
  private $age;

   public function __construct($name,$age)
   {
     $this->name = $name;
     $this->age = $age;
   }

   public function getName(){
      return $this->name;
   }
   public function getAge(){
      return $this->age;
   }
   public function setName($name){
      return $this->name = $name;
   }
   public function setAge($age){
      return $this->age = $age;
   }
  
  //  __GET magic method

  public function __GET($property){
     if(property_exists($this,$property)){
       return $this->$property;
     }
  }
  //  SET magic method

  public function __SET($property,$value){
     if(property_exists($this,$property)){
       return $this->$property = $value;
     }
  }

}

$user1 = new User('Sona',42);

// echo $user1->getName(). '<br>';
// echo $user1->getAge();


 $user1->__SET('name',"Depeeka") . '<br>';
 $user1->__SET('age',27);

echo $user1->__GET('name') . '<br>';
echo $user1->__GET('age');