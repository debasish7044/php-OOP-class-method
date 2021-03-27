<?php 

class User {
   public $name;
   public $age;

    public function __construct($name,$age)
    {
      echo "Class " . __CLASS__ . " started initiated <br>";
      $this->name = $name;
      $this->age = $age;
    }

  public function sayHello()
  {
    return $this->name . ' say hello & he is ' . $this->age . ' years old';
  }
   
  // Called when no other reference to certain object
  // user for clean up and closing connection
  public function __destruct()
  {
    echo  '<br>destruct run...';
  }
}

$user1 = new User('ram', 32);

echo $user1->name;
echo '<br>';
echo $user1->age;
echo '<br>';
echo $user1->sayHello();

echo '<br>';
echo '<br>';

$user2 = new User('shyam', 22);

echo $user2->name;
echo '<br>';
echo $user2->age;
echo '<br>';
echo $user2->sayHello();