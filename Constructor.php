<?php
  class User {
    public $name;
    public $age;
    
    // create the constructor. Runs when pbject is created
    public function __construct($name, $age){ 
      echo 'Class ' . __CLASS__ . ' instantiated<br>'; // Returns the current class that you are in. Known as a magic constant.
      $this->name = $name;
      $this->age = $age;
    }
    // create the destructor. Called when no other references to a certain object 
    // Used for cleanup, closing connections, etc
    public function __destruct(){
      echo 'destructor ran';
    }
    
    public function sayHello(){
      return this->name . ' Says Hello';
    }
  }

  $user1 - new User('Andrew', 31);
  echo $user1->name . ' is ' . $user1->age . ' years old';
  echo '<br>';
  echo $user1->sayHello(); // Name was passed in when we instantiated the constructor

  echo '<br>';
  
  $user2 - new User('Brad', 36);
  echo $user2->name . ' is ' . $user2->age . ' years old';
  echo '<br>';
  echo $user2->sayHello();

  
