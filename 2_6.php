<?php 

class User {
  protected $name;
  protected $age;

  public function __construct($name,$age)
  {
    $this->name = $name;
    $this->age = $age;
  }
}

class Customer extends User {
  
  private $balance;

  public function __construct($name,$age,$balance)
  {
    parent::__construct($name,$age);
    $this->balance = $balance;
  }
   
  public function payBill($amount) {
    return $this->name . " has paid the bill of " . $amount . " Rupees";
  }

  public function getBalance(){
     return $this->balance;
  }
}

$customer1 = new Customer("ram",35, 65);

echo $customer1->payBill(200);
echo "<br>";
echo 'your balance is ' . $customer1->getBalance();


// static method 

// class User {
   
//    public $name;
//    public $age;
    
//    public static $minpasslength = 5;

//    public static function validPassword($pass){
//        if(strlen($pass) > self::$minpasslength){
//           return true;
//        }else {
//            return false;
//        }
//    }
 
// }

// $password = "123456";

// if(User::validPassword($password)){
//    echo "password is valid";
// }else {
//    echo "password is invalid";
// }

