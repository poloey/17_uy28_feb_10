<?php 

class Todo {
  public $text;
  public $complete = false;

  public function __construct($text, $complete = false) {
    $this->text = $text;
    $this->complete = $complete;
  }

  public function todo_complete() {
    $this->complete = true;
  }

  public function todo_incomplete() {
    $this->complete = false;
  }
}

$todos = [
  new Todo('clean the house'),
  new Todo('Go to market'),
  new Todo('Reading book for 2 hours', true)
];

