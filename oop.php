<?php
class Person
{
  private $name;
  private $email;
  private static $ageLimit = 40;

  // constructor double freaking underscore!!!
  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
    echo __CLASS__ . ' created<br>';
  }
  //Deconstructor
  public function __destruct()
  {
    echo __CLASS__ . ' destroyed<br>';
  }
  // setter
  public function setName($name)
  {
    $this->name = $name;
  }
  //getter
  public function getName()
  {
    return $this->name . '<br>';
  }
  //setter
  public function setEmail($email)
  {
    $this->email = $email;
  }
  // getter
  public function getEmail()
  {
    return $this->email . '<br>';
  }
  public static function getAgeLimit()
  {
    return self::$ageLimit;
  }
}

// static props and method
// echo Person::getAgeLimit();


// $person1 = new Person('John Doe', 'test@test.com');
// echo $person1->getName();

// class Customer extends Person
// {
//   private $balance;

//   public function __construct($name, $email, $balance)
//   {
//     parent::__construct($name, $email, $balance);
//     $this->balance = $balance;
//     echo 'A new ' . __CLASS__ . ' has been created';
//   }

//   public function setBalance($balance)
//   {
//     $this->balance = $balance;
//   }
//   // getter
//   public function getBalance()
//   {
//     return $this->balance . '<br>';
//   }
// }


// $customer1 = new Customer('john Doe', 'test@test.com', 300);

// echo $customer1->getBalance();
