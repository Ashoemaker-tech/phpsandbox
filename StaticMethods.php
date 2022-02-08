<?php
class User {
  public $name;
  public $age;
  public static $ninPassLength = 6;
  
  public static function validatePass($pass){
    if(strlen($pass) >= self::$minPassLength)
      return true;
  }else {
    return false;
  }
}

// did not have to instantiate to use static method
$password = 'hello';
if(User::validatePass($password)){
  echo 'Password valid';
}else {
  echo 'Password not valid';
}
