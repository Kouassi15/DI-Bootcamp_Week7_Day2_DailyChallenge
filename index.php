<?php

use User as GlobalUser;

class UserN {
  private $name;
  private $age;

  public function setName($name) {
    // Trim the white spaces
    if(($name)<=3){
        $exception = new Exception("The name should be at least 3 characters long");
        $exception->getMessage();
    }
    $name = trim($name);
    $this -> name = $name;
   
  }

  public function setAge($age) {
    // Cast into an integer type
    if(($age)<=0){
     $exception = new Exception("The age cannot be zero or less") ;
     $exception->getMessage();
    }

    $age = (int)$age;
    $this -> age = $age;
  }

  public function getName() {
    return $this -> name;
  }

  public function getAge() {
    return $this -> age;
  }
 }
  $user = new UserN(28);
  $user->getAge();
 echo $user->getName();
//   echo $exception->getMessage();


function test()
{
  // Test code here
  $dataForUsers = array(
    array("Ben",4),
    array("Eva",28),
    array("li",29),
    array("Catie","not yet born"),
    array("Sue",1.5)
);
}

?>