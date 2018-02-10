## object oriented php  

#### class generally have 3 things 

* variable as properties - relation with object by `$this`
* function as method  - relation with object by `$this`
* constant - relation with class by `self`     

#### Some concept for object oriented programming    

* encapsulations (public, private, protected)    
* inheritance  (extends)    
* polymorphism  (interface, implants)     
* overloading (setting new property outside class)
* overriding (overriding parents method or properties value)    

#### `__construct` magic method    

The `__construct()` method is automatically called when the object is first created.   

~~~php
class Person {
  public $name;
  public $email;
  public function __construct ($n, $e) {
    $this->name = $n;
    $this->email = $e;
  }
}
$mithu = new Person('mithu', 'mithu@gmail.com');
print_r($mithu);

/*
// output of $mithu object 
Person Object
(
    [name] => mithu
    [email] => mithu@gmail.com
)
 */

~~~

#### new line character for cmd

~~~php
"\n"
~~~

#### relation with class and object     

*   static properties, static method and  constant has relation with class

* properties and method relation with object    



