<?php

/**
 encapsulation 
  * public
  * protected 
  * private
 inheritance
 polymorphism
 overriding 
 overloading
 */

// relation with object
// variable  - properties 
//function - method

 // constant relation with class itself


/**
//js
  camelCase
  // php
  snake_case
  // php constant
  SCREAMING_SNAKE_CASE
 */

// class Father {
//   protected $name = 'Rahim';
//   //getter 
//   public function get_name () {
//     return $this->name;
//   }
//   //setter
//   public function set_name($name) {
//     $this->name = $name;
//   }

// }

// class Son extends Father {

//   public function get_name () {
//     return $this->name;
//   }
// }



// $obj = new Son();
// $obj->car = 'yes';
// echo $obj->get_name();


/**
 * magic method
 */


// class Hello {
//   public function __construct () {
//     echo 'some thing';
//   }
//   public $hello = 'hello';

//   public function sayName() {
//     echo 'sayName';
//   }
// }

// $a = new Hello();

class Person {
  public $name;
  public $email;
  public function __construct ($n, $e) {
    $this->name = $n;
    $this->email = $e;
  }
}

$mithu = new Person('mithu', 'mithu@gmail.com');
$akbar = new Person('akbar', 'akbar@gmail.com');
$rajib = new Person('rajib', 'rajib@gmail.com');
$helal = new Person('helal', 'helal@gmail.com');
$sujon = new Person('sujon', 'sujon@gmail.com');

$people = [$mithu, $akbar, $rajib, $helal, $sujon];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>all people</title>
  <link rel="stylesheet" href="bootstrap.css">
</head>
<body class="bg-info">
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h2>All people</h2>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <tr>
            <th>Name</th>
            <th>Email</th>
          </tr>
          <?php foreach($people as $person): ?>
            <tr>
              <td><?php echo $person->name; ?></td>
              <td><?php echo $person->email; ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
  
</body>
</html>














