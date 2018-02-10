<?php 
require 'Todo.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>all todos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="bootstrap.css">
  <style>
    .complete {
      text-decoration: line-through;
    }
  </style>
</head>
<body class="bg-success">
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h2>All todos</h2>
      </div>
      <div class="card-body">
        <ul class="list-group">
          <?php foreach ($todos as $todo): ?>
            <li class="list-group-item <?= $todo->complete ? 'complete' : ''; ?>">


              <?= $todo->text; ?>
              <?php if ($todo->complete): ?>
              <i class="fa fa-check text-success"></i>
              <?php endif; ?>
                
              </li>                        
            
          <?php endforeach ?>
        </ul>
      </div>
    </div>
  </div>
  
</body>
</html>