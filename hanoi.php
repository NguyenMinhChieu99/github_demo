<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    class Car 
    {
        public $name ;
        protected $color;
        protected $price;

        public function __construct($name, $color, $price)
        {
            $this->name= $name;
            $this->color= $color;
            $this->price= $price;
        }
        public function intro() 
        {
            echo "The car is {$this->name} and the color is {$this->color} and price is {$this->price}"; 
        }
    }

    class Audi extends Car
    {
       public function mes()
       {
         echo  "The car is {$this->name} and the color is {$this->color} and price is {$this->price}";
       }
    }
    
    $audi1 = new Car("Audi A7","red","200");
    echo $audi1->intro();  
    echo ("<br>") ;
    $huyndai = new Audi(" Elantra","wight","150");
    echo $huyndai->mes(); 
    
    ?>
</body>
</html>