<?php

class Bangladesh {
  const capital = 'Dhaka';
  public $name = 'Bangladesh';
  public static $email = 'bangladesh@gmail.com';
  public function hello () {
    echo 'hello from bangladesh';
  }
}

$obj = new Bangladesh;

echo Bangladesh::$email;
echo "\n";
echo Bangladesh::capital;


/// class
// const class 
// static properties or method relation with class

// any properties and method relation with object 