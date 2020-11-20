<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class product{
        public $name;
        public $code;
        public $quantity;
        public $price;
        function __construct($name,$code){
            $this->name =$name;
            $this->code =$code;
  
        }
        function get_name(){
            return $this->name;
        }
        function get_code(){
          return $this->code;
      }
    }
    $table = new product("Table",001);
    
    echo $table->get_name();
    echo "<br>";
    echo $table->get_code();
    
    
    ?>
  </body>
  </html>
  