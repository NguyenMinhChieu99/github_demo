<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  class Product{
      public $name;
      public $code;
      public $quantity;
      public $price;

      function set_name($name){
          $this->name =$name;

      }

      function get_name(){
          return $this->name;
      }
    
  }
  
  $table = new Product();
  $chair = new Product();
  $board = new Product();

  $table->set_name('Table');
  $chair->set_name('Chair');
  $board->set_name('Board');

  echo $table->get_name();
  echo "<br>";
  echo $chair->get_name();
  echo "<br>";
  echo $board->get_name();
  
  
  ?>
</body>
</html>